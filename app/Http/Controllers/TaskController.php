<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Scope;
use App\Group;
use App\Priority;
use App\Category;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
	protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }

    public function index(Request $request)
	{
    	return view('tasks.index',[
    		'tasks' => $this->tasks->forUser($request->user()),
    		]);
	}

    public function all()
    {
        $tasks = Task::paginate(5);
        return view('tasks.allTasks',compact('tasks'));
    }

    public function add(Request $request)
    {
        $users = User::all();
        $groups = Group::all();
        $categories = Category::all();
        $scopes = Scope::all();
        $priorities = Priority::all();
        return view('tasks.addTask', compact('users','groups','categories','scopes','priorities'));
    }

    /*public function manage(Request $request)
    {
        $users = User::all();
        return view('manage.manage', compact('users'));
    }*/

    public function history($id)
    {
        $tasks = DB::table('tasks')
                        ->where('user_id', '$id')
                        ->get();
        return view('manage.history', compact('tasks','user'));
    }

    public function view($id)
    {
        $task = Task::find($id);
        $users = User::all();
        return view('tasks.viewTask', compact('task','users'));
    }

    public function edit($id)
    {
      /* $tasks = DB::table('tasks')
                        ->where('user_id', '$id')
                        ->get();*/
        return view('tasks.editTask', compact('tasks','user'));  
    }

	public function store(Request $request)
	{
    	$this->validate($request, [
        'name' => 'required|max:255',
        'description' => 'required',
        'category' => 'required',
        'priority' => 'required',
        'assigned_to' => 'required',
        'group' => 'required',
        'due_date' => 'required',
    	]);

    $request->user()->tasks()->create([
        'name' => $request->name,
        'description' => $request->description,
        'category' => $request->category,
        'priority' => $request->priority,
        'assigned_to' => $request->assigned_to,
        'group' => $request->group,
        'due_date' => $request->due_date,
        'scope' => $request->scope,
        //'tagged' => $request->tagged,
    ]);

    return redirect('/tasks');
	}


	public function destroy(Request $request, Task $task)
	{
    	$this->authorize('destroy', $task);
    	$task->delete();

    return redirect('/tasks');
	}
}
