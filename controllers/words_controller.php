<?php
class WordsController extends AppController {

	var $name = 'Words';

	function index() {
		$this->Word->recursive = 0;
		$this->set('words', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid word', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('word', $this->Word->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Word->create();
			if ($this->Word->save($this->data)) {
				$this->Session->setFlash(__('The word has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The word could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid word', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Word->save($this->data)) {
				$this->Session->setFlash(__('The word has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The word could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Word->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for word', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Word->delete($id)) {
			$this->Session->setFlash(__('Word deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Word was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

        function search(){
            if (!empty($this->data)){
                //print_r($this->data);
                $keyword = $this->data['Word']['keyword'];
                $searchin = $this->data['Word']['searchin'];
                switch ($this->data['Word']['searchin']){
                    case 'Tegal':
                        $result = $this->Word->find('all',array('conditions'=>array('tegal LIKE'=>'%'.$keyword.'%')));
                    break;
                    case 'Indonesia':
                        $result = $this->Word->find('all',array('conditions'=>array('indonesia LIKE'=>'%'.$keyword.'%')));
                    break;
                    case 'English':
                        $result = $this->Word->find('all',array('conditions'=>array('inggris LIKE'=>'%'.$keyword.'%')));
                    break;
                }
                //$result = $this->Word->find('all',array('conditions'=>array('tegal LIKE'=>'%'.$keyword.'%')));
                //$this->redirect(array('controller'=>'pages'));
                //$this->set('result',$result);
                $this->set(compact('result','searchin','keyword'));
            }
        }
}
?>