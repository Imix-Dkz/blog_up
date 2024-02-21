<?php
namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{ //Gestión de multiples rutas
    public function index()
    {   //Metodo para página principal
        //$cursos = Curso::all(); //Obtiene TODO
        $cursos = Curso::orderBy('id','desc')->paginate(10); //Datos Paginado 10, Def 15
        //return $cursos; //Manda los datos en RAW

        //return view('cursos.index');
        return view('cursos.index', compact('cursos'));
    }
    public function create(){ //Metodo para mostrar el metodo ce creación de curso
        return view('cursos.create');
    }
    
    //Cuando se usa el metodo StoreCurso las validaciones se hacen desde StoreCurso.php
    public function store(StoreCurso $request)
    //public function store(Request $request)
    { //return $request->all(); Para ver que llego
        
        /* //Antes de mandar a guardar los datos lo adecuado es realizar una validación de la información
            $request->validate([
                'name' => 'required|max:10',
                'descripcion' => 'required|min:10',
                'categoria' => 'required'
            ]);

            //También se puede optimizar el proceso de guardado de datos para no anotar todos los atributos
                $curso = new Curso();
                $curso->name = $request->name;
                $curso->descripcion = $request->descripcion;
                $curso->categoria = $request->categoria;
            $curso->save();
        */
        
        //De esta forma ya no hay que agregar el "$curso->save();" en el proceso de guardado y se puede optimizar el curso...
        $curso = Curso::create($request->all()
            /*[
            'name'=> $request->name,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria
            ]*/
        );


        
        return redirect()->route('cursos.show', $curso->id);
    }
    public function show(Curso $curso)
    //public function show($id)
    {   //Metodo para mostrar algún elemento en particula
        //Si la variable que se manda coincide en nombre con lo que se recibe
        //se puede hacer de la siguiente forma

        //Si se busca obtener los datos desde la ID del curso se hace lo siguiente...
            //..public function show($id){...
                //$curso = Curso::find($id); //return $curso;
                //return view('cursos.show', compact('curso')); //Manda un ['curso' => $curso]
            //...

        //Si puede que tengan nombres diferentes es así ...
            //return view('cursos.show', ['a' => $curso]);
        
        //Cuando se manda la variable de datos completa es así...
        return view('cursos.show', compact('curso'));
    }

    /*  public function edit($id)
        { //[ FORMA 1 DE OBTENER DATOS ]
            $curso = Curso::find($id);
            return $curso;
        }
    */
    public function edit(Curso $curso){ //return $curso;
        return view('cursos.edit', compact('curso'));
    }
    public function update(Request $request, Curso $curso){ //return $curso;

        //Antes de mandar a guardar los datos lo adecuado es realizar una validación de la información
        $request->validate([
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ]);

        /* //return $request->all();
            $curso->name = $request->name;
            $curso->descripcion = $request->descripcion;
            $curso->categoria = $request->categoria;
        $curso->save();*/
        
        //Si previamente se realizó una validación completa de formulario(Model/Curso.php) se puede hace lo siguiente
        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso)
    { //Se crea el metodo para eliminación de registros...
        $curso->delete();
        return redirect()->route(('cursos.index'));
    }
}
