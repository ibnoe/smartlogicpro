<?php


use Cartalyst\Sentry\Users\Eloquent\User as SentryUserModel;

class User extends SentryUserModel
{
    // Add your validation rules here
    public static $rules = [
        'first_name' => 'required',
        'email' => 'required|email|unique:users,email,:id',
        'password' => 'confirmed|required|min:5',
		'kd_perusahaan' => 'required',
		'kd_karyawan' => 'required', 
        'recaptcha_response_field' => 'required|recaptcha',
    ];

    // Don't forget to fill this array
    protected $fillable = ['first_name', 'last_name', 'email', 'password','kd_perusahaan', 'kd_karyawan'];

	/**
	 * Relasi pivot (Many-to-Many) dengan buku
	 * @return Collection
	 */
	public function books()
    {
        return $this->belongsToMany('Book')->withPivot('returned')->withTimestamps();
    }
    public function userId($email)
    {
        $userid = DB::table('users')->where('name', $email)->first();
    }
}
