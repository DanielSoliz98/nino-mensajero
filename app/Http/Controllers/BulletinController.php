<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Bulletin;
use App\GeneratedInformation;
use App\User;

class BulletinController extends Controller
{
    /**
     * Bulletin controller require authentication of a Admin.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin'])->except('index','show','user');
    }

    /**
     * 
     */
    public function registerView()
    {
        return view('users.admin.register-bulletin');
    }

    /**
     * 
     */
    public function register(Request $request)
    {
        $this->validatorBulletin($request->all())->validate();

        $bulletin = $this->create($request->all());

        return redirect('/admin/bulletins')->with('success', 'Boletín registrado exitosamente.');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validatorBulletin(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|min:10|max:50',
            'description' => 'required|string|min:10|max:200',
            'publication_date' => 'required|date'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $bulletin = Bulletin::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'publication_date' => $data['publication_date'],
            'is_published' => false,
        ]);

        $bulletin->save();

        return $bulletin;
    }

    /**
     * Return view of bulletins.
     */
    public function view()
    {
        $bulletins = Bulletin::orderBy('publication_date', 'desc')
            ->paginate(10);
        return view('users.admin.bulletins', compact('bulletins'));
    }

    /**
     * Publish a bulletin.
     */
    public function publish($id)
    {
        $bulletin = Bulletin::find($id);
        $bulletin->is_published = true;
        $bulletin->save();
        return redirect('/admin/bulletins')->with('success', 'Boletín publicado exitosamente.');
    }

    /**
     * View of Bulletins
     */
    public function index()
    {
        $bulletins = Bulletin::where('is_published',true)->get();
        return view('bulletin.see-bulletin',compact('bulletins'));
    }

    /**
     * View a specific bulletin
     */
    public function show($id)
    {
        $informations = GeneratedInformation::where('bulletin_id',$id)->get();
        $bulletin = Bulletin::find($id);
        return view('bulletin.see-generated-information',compact('informations','bulletin'));
    }
    
}
