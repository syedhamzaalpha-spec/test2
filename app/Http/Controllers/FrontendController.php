<?php

namespace App\Http\Controllers;

use App\Models\Blog;


class FrontendController extends Controller
{
    public function home()
    {
        return view(
            'frontend.pages.home',
            [
                'title' => 'Professional Trademark Service  | ',
                'description' => ''
            ]
        );
    }
      public function blog()
    {
        return view(
            'frontend.pages.blog',
            [
                'title' => 'blog| ',
                'description' => ''
            ]
        );
    }
    public function about()
    {
        return view(
            'frontend.pages.about',
            [
                'title' => 'About Us | ',
                'description' => ''
            ]
        );
    }
    public function contact()
    {
        return view(
            'frontend.pages.contact',
            [
                'title' => 'Contact Us | ',
                'description' => ''
            ]
        );
    }
    public function thankYou()
    {
        return view(
            'frontend.pages.thankyou',
            [
                'title' => 'Thank You | ',
                'description' => ''
            ]
        );
    }
    public function privacyPolicy()
    {
        return view(
            'frontend.pages.privacy-policy',
            [
                'title' => 'Privacy Policy | ',
                'description' => ''
            ]
        );
    }
    public function termsAndConditions()
    {
        return view(
            'frontend.pages.terms-and-conditions',
            [
                'title' => 'Terms and Conditions | ',
                'description' => ''
            ]
        );
    }
     public function FAQs()
    {
        return view(
            'frontend.pages.FAQs',
            [
                'title' => 'faqs | ',
                'description' => ''
            ]
        );
    }
}
