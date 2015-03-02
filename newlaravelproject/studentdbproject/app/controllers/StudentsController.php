<?php

class StudentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$students = Student::all();
		return View::make("students.index")
			->with('students', $students);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('students.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'firstname' => 'required',
			'lastname' => 'required|email',
			'birthdate' => 'date',
			'motto' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('nerds/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$student = new Student;
			$student->firstname = Input::get('firstname');
			$student->lastname = Input::get('lastname');
			$student->birthdate = Input::get('birthdate');
			$student->motto = Input::get('motto');
			$student->save();

			// redirect
			Session::flash('message', 'Successfully created nerd!');
			return Redirect::to('nerds');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$student = Student::find($id);

		// show the view and pass the nerd to it
		return View::make('students.show')
			->with('student', $student);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$student = Student::find($id);

		// show the edit form and pass the nerd
		return View::make('students.edit')
			->with('student', $student);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$rules = array(
			'firstname'     => 'required',
			'lastname'      => 'required',
			'birthdate' 	=> 'date',
			'motto' 		=> 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('students/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$student = Student::find($id);
			$student->firstname  = Input::get('firstname');
			$student->lastname   = Input::get('lastname');
			$student->birthdate  = Input::get('birthdate');
			$student->motto	  	 = Input::get('motto');
			$student->save();

			// redirect
			Session::flash('message', 'Successfully updated student!');
			return Redirect::to('students');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$student = Nerd::find($id);
		$student->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the student!');
		return Redirect::to('students');
	}


}
