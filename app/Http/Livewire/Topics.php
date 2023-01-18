<?php

namespace App\Http\Livewire;

use App\Models\Collection;
use Livewire\Component;

class Topics extends Component
{
    public $topics; //Collections property
    // public $_id, $_oldid, $_newid;
    public $title, $description, $coverPhoto, $subCollections, $featured, $introText, $bodyText, $mainImage; //Collections field names
    public $topic_id;
    public $isOpen = 0;

    public function render()
    {
        $this->topics = Collection::all();
        return view('livewire.topics.view');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->_id = '';
        $this->_oldid = '';
        // $this->_newid = '';
        $this->title = '';
        $this->description = '';
        $this->coverPhoto = '';
        $this->subCollections = '';
        $this->featured = '';
        $this->introText = '';
        $this->bodyText = '';
        $this->mainImage = '';
        $this->topic_id = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
   
        Collection::updateOrCreate(['_newid' => $this->topic_id], [
            'title' => $this->title,
            'description' => $this->description
        ]);
  
        session()->flash('message', 
            $this->topic_id ? 'Topic Updated Successfully.' : 'Topic Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    
    public function edit($id)
    {
        $topic = Collection::findOrFail($id);
        $this->_id = $topic->_id;
        $this->_oldid = $topic->_oldid;
        $this->topic_id = $id;
        $this->title = $topic->title;
        $this->description = $topic->description;
        $this->coverPhoto = $topic->coverPhoto;
        $this->subCollections = $topic->subCollections;
        $this->featured = $topic->featured;
        $this->introText = $topic->introText;
        $this->bodyText = $topic->bodyText;
        $this->mainImage = $topic->mainImage;
    
        $this->openModal();
    }
    
    public function delete($id)
    {
        Collection::find($id)->delete();
        session()->flash('message', 'Topic Deleted Successfully.');
    }    

}