<?php

    namespace App\Controllers;

    class page extends BaseController{
        
        public function about()
        {
            return view('about', [
                'title' => 'Halaman About',
                'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
                halaman ini.'
                ]);
        }
        public function contact(Type $var = null)
        {
            return view('contact', [
                'title' => 'HALAMAN CONTANCT',
                'content' => 'ini adalah halaman contact dan hubungi ke nomor 08217383728328'
            ]);
        }
        public function faqs()
        {
            echo "ini adalah halaman faqs";
        }
        public function tos()
        {
            echo "ini adalah halaman Term of Services";
        }
        public function artikel()
        {
            return View ('artikel');
        }
    }



