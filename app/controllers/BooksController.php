<?php

class BooksController extends \BaseController {

	/**
	 * Instantiate a new BooksController
	 */
	public function __construct()
	{
		// Letakan filter regularUser sebelum memanggil fungsi borrow
		$this->beforeFilter('regularUser', array( 'only' => array('borrow') ) );
	}

	/**
	 * Display a listing of books
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Datatable::shouldHandle())
	    {
	    	// eager load author untuk menghemat query sql
	        return Datatable::collection(Book::with('author')->get())
	            ->showColumns('id', 'title', 'amount', 'stock')
	            // menggunakan closure untuk menampilkan nama penulis dari relasi
	            ->addColumn('author', function ($model) {
                    return $model->author->name;
                })
	            ->addColumn('', function ($model) {
                    $html = '<a href="'.route('marketing.books.edit', ['books'=>$model->id]).'" class="uk-button uk-button-small uk-button-link">edit</a> ';
                    $html .= Form::open(array('url' => route('marketing.books.destroy', ['books'=>$model->id]), 'method'=>'delete', 'class'=>'uk-display-inline'));
					$html .= Form::submit('delete', array('class' => 'uk-button uk-button-small'));
					$html .= Form::close();
					return $html;
                })
	            ->searchColumns('title', 'amount', 'author')
	            ->orderColumns('title', 'amount', 'author')
	            ->make();
	    }
		return View::make('books.index')->withTitle('Buku');
	}

	/**
	 * Show the form for creating a new book
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('books.create')->withTitle('Tambah Buku');
	}

	/**
	 * Store a newly created book in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Book::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$book = Book::create($data);

		return Redirect::route('admin.books.index')->with("successMessage", "Berhasil menyimpan $book->title ");;
	}

	/**
	 * Display the specified book.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$book = Book::findOrFail($id);

		return View::make('books.show', compact('book'));
	}

	/**
	 * Show the form for editing the specified book.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$book = Book::find($id);

		return View::make('books.edit', ['book'=>$book])->withTitle("Ubah $book->title");
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$book = Book::findOrFail($id);

		$validator = Validator::make($data = Input::all(), $book->updateRules());

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if (!$book->update($data)) {
            return Redirect::back();
        }

		return Redirect::route('admin.books.index')->with("successMessage", "Berhasil menyimpan $book->title. ");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (!Book::destroy($id)) {
            return Redirect::back();
        }

		return Redirect::route('admin.books.index')->with('successMessage', 'Buku berhasil dihapus.');
	}

	/**
	 * Borrow book
	 * @param  int $id book id
	 * @return response
	 */
	public function borrow($id)
	{
		$book = Book::findOrFail($id);

		try {
			$book->borrow();
		} catch (BookException $e) {
			return Redirect::back()->with('errorMessage', $e->getMessage());
		}

		return Redirect::back()->with("successMessage", "Anda telah meminjam $book->title");
	}

	/**
	 * Get datatable for books borrow
	 * @return json
	 */
	public function borrowDatatable()
    {
        // eager load author untuk menghemat query sql
        return Datatable::collection(Book::with('author')->get())
            ->showColumns('id', 'title', 'amount', 'stock')
            // menggunakan closure untuk menampilkan nama penulis dari relasi
            ->addColumn('author', function ($model) {
                return $model->author->name;
            })
            // menggunakan helper untuk membuat link
            ->addColumn('', function ($model) {
                return link_to_route('books.borrow', 'Pinjam', ['book'=>$model->id]);
            })
            ->searchColumns('title', 'amount', 'author')
            ->orderColumns('title', 'amount', 'author')
            ->make();
    }

    /**
     * Return specified book
     * @param  int $id book id
     * @return response
     */
    public function returnBack($id)
    {
    	$book = Book::findOrFail($id);
    	$book->returnBack();
    	return Redirect::back()->with("successMessage", "Anda telah mengembalikan $book->title.");
    }
}