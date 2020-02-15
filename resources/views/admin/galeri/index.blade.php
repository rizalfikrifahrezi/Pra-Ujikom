@extends('layouts.master')

@section('title')
    Galeri
@endsection

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Galeri</h5><br>
                <center>
                    <p></p>
                        <a href="{{ route('galeri.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th style="text-align: center;">Bantuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galeri ?? '' as $data)
                            <tr>
                                <td><img src="{{asset('assets/img/galeri/' .$data->foto)}}"
                                    style="width:50px; height:50px;"></td>
                                <td>{{$data->foto}}</td>


								<td style="text-align: center;">
                                    <form action="{{route('galeri.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('galeri.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                    </a>
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
									</form>
								</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection
