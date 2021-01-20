<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\QuestionM;

class Question extends Component
{
	public $search;				//ini buat kotak search
	public $questId,$questiontext;
	public $addQuestion = 0;

    public function render()
    {
    	$searchParams = '%'.$this->search.'%';		//part ini buat searching
    	return view('livewire.question',[				
    	'quest' => QuestionM::where('text','like', $searchParams)->latest()->paginate(5) //ini buat mecah list jadi berhalaman2

    	]
    );
    }

    public function showAddQModal()		//ini untuk show dialog
    {
    	$this->addQuestion = true;	 
    }

    public function hideAddQModal()		//ini untuk hide dialog
    {
    	$this->addQuestion = false;
    }
        public function showAddAModal()		//ini untuk show dialog
    {
    	$this->addQuestion = true;	 
    }

    public function hideAddAModal()		//ini untuk hide dialog
    {
    	$this->addQuestion = false;
    }

    public function store()			//ini untuk masukin apa yang ada di dialog
    {
    	$this->validate(
    		[
    		'questiontext' => 'required',
    		]
    	);


    	QuestionM::updateOrCreate(['id' => $this->questId],['text' => $this->questiontext]);
    	
    	$this->hideAddQModal();

    	session()->flash('info', $this->questId ? 'Post Updated Successfully' : 'Post Created Successfully');

    	$this->questId='';
    	$this->questiontext='';
    }

    public function edit($id)
    {
    	$post = QuestionM::findOrFail($id);
    	$this->questId = $id;
    	$this->questiontext = $post->text;

    	$this->showAddQModal();

    }
    
    public function delete($id)
    {
    	QuestionM::find($id)->delete();
    	session()->flash('delete','Post Deleted Successfully');
    }



}
