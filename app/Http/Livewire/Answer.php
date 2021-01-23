<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AnswerM;

class Answer extends Component
{
	public $search;				//ini buat kotak search
	public $answerId,$answertext,$valuee,$values,$valuet,$valuej;
	public $addAnswer,$questionId = 0;

    public function render()
    {
    	$searchParams = '%'.$this->search.'%';		//part ini buat searching
    	return view('livewire.answer',[				
    	'ans' => AnswerM::where('text','like', $searchParams)->latest()->paginate(5) //ini buat mecah list jadi berhalaman2

    	]
    );
    }

    public function showAddAModal()		//ini untuk show dialog
    {
    	$this->addAnswer = true;	 
    }

    public function hideAddAModal()		//ini untuk hide dialog
    {
    	$this->addAnswer = false;
    }

    public function store()			//ini untuk masukin apa yang ada di dialog
    {
    	$this->validate(
    		[
    		'answertext' => 'required',
    		]
    	);


    	AnswerM::updateOrCreate(['id' => $this->answerId],['id_question' => $this->questionId],['text' => $this->answertext],['value_e' => $this->valuee],['value_s' => $this->values],['value_t' => $this->valuet],['value_j' => $this->valuej]);
    	
    	$this->hideAddAModal();

    	session()->flash('info', $this->answerId ? 'Post Updated Successfully' : 'Post Created Successfully');

    	$this->answerId='';
    	$this->questionId='';
    	$this->answertext='';
    	$this->valuee='';
    	$this->values='';
    	$this->valuet='';
    	$this->valuej='';
    }

    public function edit($id)
    {
    	$post = AnswerM::findOrFail($id);
    	$this->answerId = $id;
    	$this->answertext = $post->text;
    	$this->valuee= $post->value_e;
    	$this->values= $post->value_s;
    	$this->valuet= $post->value_t;
    	$this->valuej= $post->value_j;

    	$this->showAddAModal();

    }
    
    public function delete($id)
    {
    	QuestionM::find($id)->delete();
    	session()->flash('delete','Post Deleted Successfully');
    }


}