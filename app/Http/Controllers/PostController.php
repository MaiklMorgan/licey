<?php 

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class PostController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\Post);
			$this->filter->add('title', 'Заголовок', 'text');
			$this->filter->submit('Поиск');
			$this->filter->reset('Сброс');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'Заголовок');
			$this->addStylesToGrid();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);
	
			$this->edit = \DataEdit::source(new \App\Post());

			$this->edit->label('Создать/Изменить новость');

			$this->edit->add('title', 'Заголовок', 'text')
				->rule('required|max:255');

			$this->edit->add('slug', 'Slug', 'hidden')
				->rule('sometimes|max:255');

			$this->edit->add('lead', 'Воодный текст', 'textarea');

			$this->edit->add('text', 'Текст', 'redactor')
				->rule('required');

			$this->edit->add('image', 'Картинка', 'image')
				->rule('required')
				->move(base_path('public_html/uploads/news'))
				->preview(80, 80);
       
        return $this->returnEditView();
    }

    public function index(Request $request){
    	return view('pages.newslist', [
    		'posts' => Post::orderBy('created_at', 'desc')->paginate(6)
    	]);
    }

    public function show(Request $request){
    	if(!$post = Post::where('slug', $request->slug)->first()) abort(404);

    	return view('pages.news', [
    		'post' => $post,
    		'posts' => Post::inRandomOrder()->paginate(3)
    	]);
    }
}
