<?php

class Laporan1111b2Controller extends \BaseController {
    
    /**
     * konstruktor
     */
    public function __construct()
    
    {
         $this -> beforeFilter('auth');
         } 
    
    /**
     * data faktur laporan 1111b3
     * 
     * @return View 
     */
    public function index()
    
    {
        
         } 
    
    
    /**
     * export ke pdf
     * 
     * @return 
     */
    public function pdf()
    
    {
         // data
        $faktur = Laporan1111b2ku :: all();
        
         $totalpenjualan = DB :: table('pembeliandlmnegeris') -> sum('penjualan');
         $totalppn = DB :: table('pembeliandlmnegeris') -> sum('ppn');
        
         return View :: make('pdf.laporan1111b2', compact('faktur'))
         -> with('faktur', $faktur)
         -> with('totalpenjualan', $totalpenjualan)
         -> with('totalppn', $totalppn);
         } 
    
    } 
