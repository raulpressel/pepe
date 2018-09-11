<?php
namespace App\Http\Controllers;
use Alert;
use App\Http\Requests;
use Artisan;
use Log;
use Storage;
use Auth;
use Carbon\Carbon;
use View;
class BackupController extends Controller
{
    public function index()
    {	
    if( (Auth::user()->role_id == '1') or (Auth::user()->role_id == '3') ){ 
        $disk = Storage::disk('local');//('laravel-backup.backup.destination.disks')[0]);
      //	$disk=storage_path(('Laravel')[0]);
        $files = $disk->files('SIGAB-Backup');
        $backups = [];
        //dd($disk,$files,$backups);
        // make an array of backup files, with their filesize and creation date
        foreach ($files as $k => $f) {
            // only take the zip files into account
            if (substr($f, -4) == '.zip' && $disk->exists($f)) {
                $backups[] = [
                    'file_path' => $f,
                    'file_name' => str_replace(('SIGAB-Backup') . '/', '', $f),
                    'file_size' => $this->humanFilesize($disk->size($f)),
                    'last_modified' => $this->getdate($disk->lastModified($f)),
                ];
            }
        }
        $ubicacion = "/SIGAB-Backup";
        // reverse the backups, so the newest one would be on top
        $backups = array_reverse($backups);
        return view("backup.backups")->with(compact('backups','ubicacion')); 
       
     
    }
    }
    public function create()
    {
        try {
            // start the backup process
            Artisan::call('backup:run',['--only-db'=>true,'--disable-notifications'=>true]);
            $output = Artisan::output();
            // log the results
            Log::info("Backpack\BackupManager -- new backup started from admin interface \r\n" . $output);
            // return the results as a response to the ajax call
            //Alert::success('Nuevo Backup creado');
  
            return redirect()->back()->with(['message'=>"Backup creado con exito!", 'alert-type'=>'success']);
        } catch (Exception $e) {
            Flash::error($e->getMessage());
            return redirect()->back();
        }
    }
    /**
     * Downloads a backup zip file.
     *
     * TODO: make it work no matter the flysystem driver (S3 Bucket, etc).
     */


    public function download($file_name)
    {
        if( (Auth::user()->role_id == '3') or (Auth::user()->role_id == '1')){ 
        //dd($file_name);
        ob_end_clean();
    
        if (Storage::disk('local')->exists('SIGAB-Backup/'.$file_name)) {
                $disk = Storage::disk('local');
                $path = storage_path('app/SIGAB-Backup/'.$file_name);
                return response()->download($path);
        } else {
            abort(404, "Error el backup no existe");
        }
    }else{abort(404, "Error el backup no existe");}
    }


    public function delete($file_name)
    {
        if( (Auth::user()->role_id == '3') or (Auth::user()->role_id == '1')){ 
        $disk = Storage::disk('local');
        if ($disk->exists('SIGAB-Backup/'.$file_name)) {

            $disk->delete('SIGAB-Backup/'.$file_name);
            return redirect()->back()->with(['message'=>"Backup borrado con exito!", 'alert-type'=>'warning']);;
        } else {
            abort(404, "Error el backup no existe");
        }
        }else{abort(404, "Error");}
        }


///////////////////////////////////////////////////////////////////////////////

    public function humanFilesize($size, $precision = 2) {
    $units = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
    $step = 1024;
    $i = 0;

    while (($size / $step) > 0.9) {
        $size = $size / $step;
        $i++;
    }
    
    return round($size, $precision).$units[$i];
    }

    public function getdate($date_modify){
        return Carbon::createFromTimeStamp($date_modify)->formatLocalized('%d %B %Y %H:%M');
    }


}


