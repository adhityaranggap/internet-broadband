<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceEmail;


class EmailController extends Controller
{
    public function index(){

		Mail::to("adhitya.rangga@cloudmatika.com")->send(new InvoiceEmail());

		return route ("cms.order.index");

	}
}
