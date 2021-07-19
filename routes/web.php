<?php

use App\Http\Controllers\FormacionNormaController;
use App\Http\Controllers\Usuario;
use App\Http\Controllers\OrigenNormaController;
use App\Http\Controllers\ImprimeController;
use App\Http\Controllers\documentoController;
use App\Models\FormacionNorma;
use App\Models\OrigenNorma;
use App\Models\documentoModel;
use App\Models\UsuarioModel;//:''v DocumentoModelController
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Esta ruta te dirige a la ventana pricipal

Route::get('/', function () {
    return view('auth.login');
})->name('home');

//Ruta para dashboard
Route::middleware(['auth:sanctum','verificacionRoles'])->get('/dashboard', function () {
    return view('dashboard' );
})->name('dashboard');

//Ruta gestor de normas 

//--------------Gestionar Users--------------

/*Route::middleware(['auth:sanctum'])->get('Usuarios' ,function () {
    return view('auth.login');
});*/
Route::group(['auth:sanctum','verificacionRoles'], function() {
    
    Route::resource('/Usuarios', Usuario::class);
    /*Route::post('/agregarorigen', [OrigenNormaController::class,'store'])->name('agregarorigen');
    Route::get('/agregarorigenfiltro', [OrigenNormaController::class,'filtro'])->name('agregarorigenfiltro');
    Route::get('/filtroNorma', [FormacionNormaController::class,'filtroNormas'])->name('filtroNorma');*/
});

//************  *********************************/
Route::group(['auth:sanctum','verificacionRoles'], function() {
    Route::resource('/dashboard/gestionNorma', FormacionNormaController::class);
});

//************ EN PRUEVA *********************************/


//Ruta para dahboard de formacion
Route::middleware(['auth:sanctum'])->get('/dashboardFormacion', function () {
    return view('dashboardFormacion');
})->name('dashboardFormacion');
        
/*-------------------Nivelación------------------*/

//Ruta a Nivelación desde el dashboard princial

Route::middleware(['auth:sanctum'])->get('Nivelacion/Principal', function () {
    return view('Nivelacion.Principal');
})->name('dashboard.NivelacionPrincipal');

/*-------------------Enseñanza Aprendizaje------------------*/

//Ruta para ingresar a Enseñanaza-Aprendizaje

Route::middleware(['auth:sanctum'])->get('Enseñanza-Aprendizaje/Principal', function () {
    return view('EnseñanzaAprendizaje.PrincipalEA');
})->name('Ense-Aprendizaje');

//Ruta para la ventana de Calendario Academico de enseñanza aprendizaje
Route::middleware(['auth:sanctum'])->get('/EnseñanzaAprendizaje/CalendarioAcademico', function () {
    return view('EnseñanzaAprendizaje.CalendarioAcad');
})->name('EnseñanzaAprendizaje.CalendarioAcad');

//Ruta para la ventana de Silabos
Route::middleware(['auth:sanctum'])->get('/EnseñanzaAprendizaje/Silabos', function () {
    return view('EnseñanzaAprendizaje.Silabos');
})->name('EnseñanzaAprendizaje.Silabos');

//Ruta para la ventana Registro de Notas
Route::middleware(['auth:sanctum'])->get('/EnseñanzaAprendizaje/RegistroDeNotas', function () {
    return view('EnseñanzaAprendizaje.RegistroNotas');
})->name('EnseñanzaAprendizaje.RegistroNotas');


/*-------------------SeguimientoEstudiante------------------*/

//Ruta para ingresar SeguimientoEstudiante 

Route::middleware(['auth:sanctum'])->get('Seguimiento-Estudiante/Principal', function () {
    return view('SeguimientoEstudiante.PrincipalSE');
})->name('SeguimientoEstudiante');


/*-------------------MovilidadAcademica------------------*/

//Ruta para ingresar MovilidadAcademica 

Route::middleware(['auth:sanctum'])->get('Movilidad-Academica/Principal', function () {
    return view('MovilidadAcademica.PrincipalMA');
})->name('MovilidadAcademica');


/*-------------------ActividadExtraCurricular------------------*/

//Ruta para ingresar ActividadExtraCurricular 

Route::middleware(['auth:sanctum'])->get('ActividadExtraCurricular/Principal', function () {
    return view('ActividadExtraCurricular.PrincipalAEC');
})->name('ActividadExtraCurricular');


/*-------------------Seguimiento Egresado PRINCIPAL------------------*/
//Ruta para ingresar ActividadExtraCurricular 

Route::middleware(['auth:sanctum'])->get('SeguimientoEgresado/Principal', function () {
    return view('SeguimientoEgresado.PrincipalSEg');
})->name('SeguimientoEgresado');

/*-------------------Seguimiento Egresado SUBIR EVIDENCIA------------------*/
//Ruta para ingresar ActividadExtraCurricular 

Route::middleware(['auth:sanctum'])->get('SeguimientoEgresado/SubirEvidencia', function () {
    return view('SeguimientoEgresado.SubirEvidencia');
})->name('SeguimientoEgresado');


/*-------------------Seguimiento Egresado SUBIR INDICADOR------------------*/
//Ruta para ingresar ActividadExtraCurricular 

Route::middleware(['auth:sanctum'])->get('SeguimientoEgresado/SubirIndicador', function () {
    return view('SeguimientoEgresado.SubirIndicador');
})->name('SeguimientoEgresado');




/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/

//Ruta para Guia rapida de Formacion

Route::middleware(['auth:sanctum'])->get('/dashboard/GuiaRapida', function () {
    return view('Formacion.GuiaRapida');
})->name('dashboard.GuiaRapida');

//Ruta para Grupos interes de Formacion
Route::middleware(['auth:sanctum'])->get('/dashboard/GruposInteres', function () {
    return view('Formacion.GruposInteres');
})->name('dashboard.GruposInteres');

//Ruta para Procesos de Formacion

Route::middleware(['auth:sanctum'])->get('/dashboard/Procesos', function () {
    return view('Formacion.Procesos');
})->name('dashboard.Procesos');

//Ruta para Procesos de Formacion
Route::group(['auth:sanctum'], function() {
    Route::get('/dashboard/Normativa', [FormacionNormaController::class,'viewDataFormacion']);
    Route::post('/agregarorigen', [OrigenNormaController::class,'store'])->name('agregarorigen');
    Route::get('/agregarorigenfiltro', [OrigenNormaController::class,'filtro'])->name('agregarorigenfiltro');
    Route::get('/filtroNorma', [FormacionNormaController::class,'filtroNormas'])->name('filtroNorma');
});
Route::group(['auth:sanctum'], function() {
    //Route::get('/dashboard/Normativa', [FormacionNormaController::class,'viewDataFormacion']);
    Route::post('/agregar_documento_plan_anual', [documentoController::class,'store'])->name('agregar_documento_plan_anual');
    //Route::get('/agregarorigenfiltro', [OrigenNormaController::class,'filtro'])->name('agregarorigenfiltro');
    //Route::get('/filtroNorma', [FormacionNormaController::class,'filtroNormas'])->name('filtroNorma');
});
Route::middleware(['auth:sanctum'])->get('/dashboard/Documentacion', function () {
    return view('Formacion.Documentacion');
})->name('dashboard.Documentacion');

//Ruta para la ventana de Indicadores de Formacion
Route::middleware(['auth:sanctum'])->get('/dashboard/Indicadores', function () {
    return view('Formacion.Indicadores');
})->name('dashboard.Indicadores');

//Ruta para la ventana de Subir Evidencia de FORMACIÓN
Route::middleware(['auth:sanctum'])->get('/dashboard/SubirEvidencia', function () {
    return view('Formacion.SubirEvidencia');
})->name('dashboard.SubirEvidencia');

//Ruta para poder imprimir el pdf
Route::get('imprimir',[ImprimeController::class,'imprime'])->name('imprimir');

//Ruta para Director de Escuela

Route::middleware(['auth:sanctum'])->get('DirectorEscuela', function() {
    return view('DashBoardDIRECTORESCUELA.DashBoardDIRECTORESCUELA');
})->name('DirectorEscuela');

Route::middleware(['auth:sanctum'])->get('FormacionDirector', function(){
    return view('DashBoardDIRECTORESCUELA.PrincipalFormacion');
});

Route::middleware(['auth:sanctum'])->get('EvidenciaFormacion', function () {
    return view('DashBoardDIRECTORESCUELA.SubirArchivoPrincipal');
});

Route::middleware(['auth:sanctum'])->get('NivelacionDirector', function () {
    return view('DashBoardDIRECTORESCUELA.Nivelacion.NivelacionDirector');
});

Route::middleware(['auth:sanctum'])->get('EvidenciaNivelacion', function () {
    return view('DashBoardDIRECTORESCUELA.Nivelacion.SubirEvidencia');
});

Route::middleware(['auth:sanctum'])->get('IndicadorNivelacion', function () {
    return view('DashBoardDIRECTORESCUELA.Nivelacion.IndicadorNivelacion');
});

Route::middleware(['auth:sanctum'])->get('EnseñanzaApredizajeDirector', function () {
    return view('DashBoardDIRECTORESCUELA.EnseAprendizaje.E-Adirector');
});

Route::middleware(['auth:sanctum'])->get('EvidenciaEAD', function () {
    return view('DashBoardDIRECTORESCUELA.EnseAprendizaje.SubirEvidencia');
});

Route::middleware(['auth:sanctum'])->get('SeguimientoEstudiante', function () {
    return view('DashBoardDIRECTORESCUELA.SeguimientoEstudiante.Principal');
});

Route::middleware(['auth:sanctum'])->get('EvidenciaSE', function () {
    return view('DashBoardDIRECTORESCUELA.SeguimientoEstudiante.SubirEvidencia');
});

Route::middleware(['auth:sanctum'])->get('IndicadorSED', function () {
    return view('DashBoardDIRECTORESCUELA.SeguimientoEstudiante.IndicadorSE');
});

Route::middleware(['auth:sanctum'])->get('ActividadExtracurriculares', function () {
    return view('DashBoardDIRECTORESCUELA.ActividadExtracurricular.Principal');
});

Route::middleware(['auth:sanctum'])->get('EvidenciaAEx', function () {
    return view('DashBoardDIRECTORESCUELA.ActividadExtracurricular.SubirEvidencia');
});

Route::middleware(['auth:sanctum'])->get('IndicadorAEx', function () {
    return view('DashBoardDIRECTORESCUELA.ActividadExtracurricular.IndicadorAEx');
});

Route::middleware(['auth:sanctum'])->get('SeguimientoEgresadoDirectorE', function () {
    return view('DashBoardDIRECTORESCUELA.SeguimientoEgresado.Principal');
});

Route::middleware(['auth:sanctum'])->get('EvidenciaSEg', function () {
    return view('DashBoardDIRECTORESCUELA.SeguimientoEgresado.SubirEvidencia');
});

Route::middleware(['auth:sanctum'])->get('IndicadorSEg', function () {
    return view('DashBoardDIRECTORESCUELA.SeguimientoEgresado.IndicadorSEg');
});
//----------------------------------------

//-------------Ruta DECANO---------------//

Route::middleware(['auth:sanctum'])->get('Decano', function() {
    return view('DashBoardDECANO.DashBoardDECANO');
})->name('Decano');

Route::middleware(['auth:sanctum'])->get('FormacionDecano', function(){
    return view('DashBoardDECANO.PrincipalFormacion');
});

Route::middleware(['auth:sanctum'])->get('SeguimientoEgresado', function () {
    return view('DashBoardDECANO.SeguimientoEgresado.Principal');
});

Route::middleware(['auth:sanctum'])->get('DecEvidenciaSEg', function () {
    return view('DashBoardDECANO.SeguimientoEgresado.SubirEvidencia');
});

//----------------------------------------

//-------------Ruta REGISTROS ACADEMICOS---------------//
Route::middleware(['auth:sanctum'])->get('RegistrosAcademicos', function() {
    return view('RegistrosAcademicos.DashBoardRegistrosAcademicos');
})->name('RegistrosAcademicos');

Route::middleware(['auth:sanctum'])->get('FormacionRegistrosAcademicos', function(){
    return view('RegistrosAcademicos.PrincipalRegistrosAcademicos');
});

Route::middleware(['auth:sanctum'])->get('EvidenciaSEg', function () {
    return view('RegistrosAcademicos.SubirEvidencia');
});

Route::middleware(['auth:sanctum'])->get('EARegistrosAcademicos', function () {
    return view('RegistrosAcademicos.EnseAprendizaje.E-AregistrosAcademicos');
});

Route::middleware(['auth:sanctum'])->get('EvidenciaEA', function () {
    return view('RegistrosAcademicos.EnseAprendizaje.SubirEvidencia');
}); 

Route::middleware(['auth:sanctum'])->get('SERegistroAcademicos', function () {
    return view('RegistrosAcademicos.SeguimientoEgresado.Principal');
});

Route::middleware(['auth:sanctum'])->get('IndicadorSE', function () {
    return view('RegistrosAcademicos.SeguimientoEgresado.IndicadorSEg');
});


//----------------------------------------

//-------------Ruta ADMISION---------------//

Route::middleware(['auth:sanctum'])->get('Admision', function () {
    return view('Admision.DashBoardAdmision');
});

Route::middleware(['auth:sanctum'])->get('FormacionAdmision', function(){
    return view('Admision.PrincipalAdmision');
});

Route::middleware(['auth:sanctum'])->get('IndicadorAd', function () {
    return view('Admision.SubIndicador');
});

Route::middleware(['auth:sanctum'])->get('NivelacionAdmision', function () {
    return view('Admision.Nivelacion.Principal');
});

Route::middleware(['auth:sanctum'])->get('SubEvidencia', function () {
    return view('Admision.Nivelacion.SubirEvidencia');
});

Route::middleware(['auth:sanctum'])->get('SubIndicador', function () {
    return view('Admision.Nivelacion.SubirIndicador');
});
//---------------------------------------

//-------------Ruta DOCENTE---------------//

Route::middleware(['auth:sanctum'])->get('Docente', function () {
    return view('Docente.DashBoardDocente');
});

Route::middleware(['auth:sanctum'])->get('PrincipalDocente', function () {
    return view('Docente.PrincipalDocente');
});

Route::middleware(['auth:sanctum'])->get('EADocente', function () {
    return view('Docente.EnseñaAprendizaje.E-Adocente');
});

Route::middleware(['auth:sanctum'])->get('SubirEvidencia', function () {
    return view('Docente.EnseñaAprendizaje.SubirEvidencia');
});

//---------------------------------------  

//-------------Ruta DOCENTE TUTOR---------------//
Route::middleware(['auth:sanctum'])->get('DocenteTutor', function () {
    return view('DocenteTutor.PrincipalDocenteTutor');
});  

Route::middleware(['auth:sanctum'])->get('PrincipalDocenteTutor', function () {
    return view('DocenteTutor.DashboardDocenteTutor');
});

Route::middleware(['auth:sanctum'])->get('SEDocenteTutor', function () {
    return view('DocenteTutor.SeguimientoEstudiante.Principal');
});

Route::middleware(['auth:sanctum'])->get('EvidenciaDocenteTutor', function () {
    return view('DocenteTutor.SeguimientoEstudiante.SubirEvidencia');
});

//---------------------------------------

//-------------Ruta PSICOPEDAGOGIA---------------//

Route::middleware(['auth:sanctum'])->get('Psicopedagogia', function () {
    return view('Psicopedagogia.PrincipalPisicopedagogia');
});

Route::middleware(['auth:sanctum'])->get('PrincipalPsicopedagogia', function () {
    return view('Psicopedagogia.DashboardPsicopedagogia');
});

Route::middleware(['auth:sanctum'])->get('SEPsicopedagogia', function () {
    return view('Psicopedagogia.SeguimientoEstudiante.Principal');
});

Route::middleware(['auth:sanctum'])->get('EvidenciaPsicopedagogia', function () {
    return view('Psicopedagogia.SeguimientoEstudiante.SubirEvidencia');
});

//---------------------------------------

//-------------Ruta UNIDAD RELACIONES INTERNACIONALES---------------//

Route::middleware(['auth:sanctum'])->get('RelacionesInternacionales', function () {
    return view('RelacionesInternacionales.PrincipalRelInternacionales');
});

Route::middleware(['auth:sanctum'])->get('PrinRelacionesInternacionales', function () {
    return view('RelacionesInternacionales.DashboardRelaInterna');
});

Route::middleware(['auth:sanctum'])->get('MARelacionesInternacionales', function () {
    return view('RelacionesInternacionales.MovilidadAcademica.Principal');
});

Route::middleware(['auth:sanctum'])->get('EviRelacionesInternacionales', function(){
    return view('RelacionesInternacionales.MovilidadAcademica.SubirEvidencia');
});
//---------------------------------------

//-------------Ruta UNIDAD PEDAGOGIA---------------//

Route::middleware(['auth:sanctum'])->get('UnidadPedagogia', function () {
    return view('UnidadPedagogia.PrincipalUnidPedagogia');
});

Route::middleware(['auth:sanctum'])->get('PrinUnidadPedagogia', function(){
    return view('UnidadPedagogia.DashboardUnidadPedagogia');
});

Route::middleware(['auth:sanctum'])->get('AcExUnidadPedagogia', function () {
    return view('UnidadPedagogia.ActividadExtracurricular.Principal');
});

Route::middleware(['auth:sanctum'])->get('EviExUnidadPedagogia', function () {
    return view('UnidadPedagogia.ActividadExtracurricular.SubirEvidencia');
});

//---------------------------------------

//-------------Ruta ATT SEGUIMIENTO EGRESADO---------------//

Route::middleware(['auth:sanctum'])->get('AttSeguimientoEgresado', function () {
    return view('AttSE.PrincipalAttSE');
});

Route::middleware(['auth:sanctum'])->get('PrinAttSeguimientoEgresado', function () {
    return view('AttSE.DashboardAttSE');
});

Route::middleware(['auth:sanctum'])->get('IndicadorAttSE', function () {
    return view('AttSE.SubirIndicador');
});

Route::middleware(['auth:sanctum'])->get('SEAtt', function () {
    return view('AttSE.SeguimientoEgresado.Principal');
});

Route::middleware(['auth:sanctum'])->get('EvidenciaSEAtt', function () {
    return view('AttSE.SeguimientoEgresado.SubirEvidencia');
});
//---------------------------------------

//-------------Ruta VIRRECTORADO ACADEMICO---------------//

Route::middleware(['auth:sanctum'])->get('VicerrectoradoAcademico', function () {
    return view('VicerrectoradoAcademico.PrincipalViceAcademico');    
});

Route::middleware(['auth:sanctum'])->get('PrinVicerrectoradoAcademico', function () {
    return view('VicerrectoradoAcademico.DashboardViceAcademico');
});

Route::middleware(['auth:sanctum'])->get('VAMovilidadAcademica', function () {
    return view('VicerrectoradoAcademico.MovilidadAcademica.Principal');
});

Route::middleware(['auth:sanctum'])->get('SubirIndicadorVA', function () {
    return view('VicerrectoradoAcademico.MovilidadAcademica.SubirIndicador');
});

Route::middleware(['auth:sanctum'])->get('VASeguimientoEgresado', function () {
    return view('VicerrectoradoAcademico.SeguimientoEgresado.Principal'); 
});

Route::middleware(['auth:sanctum'])->get('EvidenciaSeguimientoEgresado', function () {
    return view('VicerrectoradoAcademico.SeguimientoEgresado.SubirEvidencia'); 
});