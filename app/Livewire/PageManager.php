<?php

namespace App\Livewire;

use Livewire\Component;

class PageManager extends Component
{

    public $currentPage = 'about';  // Default, modified later when app running
    public $directionOfTransition = 'left'; // Default, modified later when app running
    
    // The order of pages to help define slide direction
    public $pageOrder = ['about', 'project', 'contact'];

    public function goToPageHere( $pageName )
    {
        // Transition direction
        // Search the index of current page & the page that will be transitioned into
        $oldIndex = array_search($this->currentPage, $this->pageOrder); 
        $newIndex = array_search($pageName, $this->pageOrder);
        
        // Set transition whether it to left or right
        // Based on what current page and next page is
        if ($newIndex > $oldIndex) {
            $this->directionOfTransition = 'left'; // Moving forward, slide out left, new comes from right
        } else {
            $this->directionOfTransition = 'right'; // Moving backward, slide out right, new comes from left
        }

        $this->currentPage = $pageName;

    }



    public function render()
    {
        return view('livewire.page-manager');
    }
}
