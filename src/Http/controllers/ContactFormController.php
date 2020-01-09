<?php
    // MyVendor\tm81_contactform\src\Http\Controllers\ContactFormController.php
    namespace tapanmandal81\tm81_contactform\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use tapanmandal81\tm81_contactform\Models\ContactForm;

    class ContactFormController extends Controller {

        public function index()
        {
           return view('tm81_contactform::contact');
        }

        public function sendMail(Request $request)
        {
            ContactForm::create($request->all());

			return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
        }


    }