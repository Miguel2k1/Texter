@extends('layouts.texter')

@section('content')

    <div class="container" style="margin-left: 0%;">
        <div class="col-lg-4">    
            <div class="card" style="width: 450px">

            <div class="card-header" style="height: 115px;">
                <img src="{{$user->profile->banner}}" style="position: absolute; height: 115px; width: 448px; margin-top: -12px; margin-left: -20px;" data-toggle="modal" data-target="#BannerModalCenter">
                <div class="dropdown" style="float: right;">
                   <!-- <button class="menu-btn material-icons" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">more_vert</button> -->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Definições</a>
                            <a class="dropdown-item" href="#">Another action</a>                            
                            <a class="dropdown-item" href="#">Sair</a>
                        </div>
                </div>

            </div>                        
                <div class="card-body unselectable" style="height: 250px;">
                    <img src="{{ Storage::url($user->profile_avatar) }}" width="120px" height="120px" style="position: relative; cursor: pointer; border-radius: 50%; margin-top: -18%;" 
                    data-toggle="modal" data-target="#exampleModalCenter">
                    
                    <ul style="list-style: none; position: absolute; padding: 10px 0px 1px;"> 
                        <li><p style="font-size: 20px;">{{$user->name}}</p></li>                
                        <li style="margin-top: -25%; margin-left: -1px;"><p><span>@</span>{{$user->slug}}</p></li>
                        <li style="margin-top: -10%; margin-left: -1px;"><p><span>{{$user->profile->about}}</span></p></li>
                        <li style="display: inline-flex;"><span class="material-icons" style="font-size: 15px; margin-top: 3px; margin-left: -2px;">location_on</span><p>{{$user->profile->location}}</p></li>
                    </ul>


                    <p>
                        @if(Auth::id() == $user->id)
                         <button type="button" class="btn-User" style="margin-top: -15%;" data-toggle="modal" data-target="#editarPerfilModal">Editar Perfil</button>
                        @endif                    
                    </p>                    
                </div>
            </div>
        </div>    <!-- Fim do Perfil de Utilizador -->
        
<!-- Modal Editar Perfil-->
    <div class="modal fade" id="editarPerfilModal" tabindex="-1" role="dialog" aria-labelledby="editarPerfilLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarPerfilLabel">Editar Perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body unselectable">
                <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <div style="display: inline-block;">
                            <img src="{{$user->profile->banner}}" style="position: absolute; height: 115px; width: 498px; margin-top: -16px; margin-left: -16px;">
                            <span class="material-icons" style=""> camera_alt </span>
                            
                            <input type="file" id="imgupload" style="display: none;">
                            <img src="{{ Storage::url($user->profile_avatar) }}" id="OpenImgUpload" width="112px" height="112px" style="border-radius: 50%; display: inline-block; position: relative; margin-top: 40px;" alt="">
                            <span class="material-icons" style="position: absolute; margin-left: -67px; margin-top: 85px; cursor: pointer;"> camera_alt </span>
                            
                        </div>
            </div>
                    <div class="form-group" style="margin-top: 10%; border-bottom: 1px solid rgb(217, 217, 217);">
                            <label for="">Sobre</label>
                            <input type="text" name="about" value="{{$user->profile->about}}" class="user-settings">
                    </div>
                    <div class="form-group" style="margin-top: 10%; border-bottom: 1px solid rgb(217, 217, 217);">
                            <label for="">Localização</label>
                            <input type="text" name="location" value="{{$user->profile->location}}" class="user-settings">
                    </div>
                    <div>
                        <a href=""><button type="submit" class="btn-User">Salvar</button></a>
                    </div>
                 </form>

            </div>
            </div>
        </div>
    </div>      

<!-- Modal Full Avatar-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div style="margin: 0 auto;">
        <img src="{{ Storage::url($user->profile_avatar) }}" width="400px" height="400px" style="border-radius: 50%; display: inline-block" alt="" class="unselectable">
      </div>
    </div>
  </div>
</div>   

</div>

<!-- Modal Full Banner-->
<div class="modal fade" id="BannerModalCenter" tabindex="-1" role="dialog" aria-labelledby="BannerModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="margin: 1.75rem; max-width: 100%;">
    <div style="margin: 0 auto;">
        <img src="{{ $user->profile->banner }}" width="1360px" height="400px" style="display: inline-block" alt="" class="unselectable">
      </div>
    </div>
  </div>
</div>   
</div>
    


@stop




