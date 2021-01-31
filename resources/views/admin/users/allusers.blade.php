@extends('admin.layouts.app')

@section('content')

            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
                        </li>
                        <li class="active-bre"><a href="#"> كل الاعضاء</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>تفاصيل الأعضاء</h4>
                                </div>

                                @if (session('msg'))
                                    <div class="msg_box">
                                        {{ session('msg') }}
                                    </div>
                                @endif

                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>اسم المستخدم</th>
                                                    <th>الايميل</th>
                                                    <th>تعديل</th>
                                                    <th>حذف</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($CurrentUsers as $allusers)
                                                <tr>
                                                    <td><a href="{{ url('adminpanel/users/editusers') }}/{{$allusers->id}}"><span class="list-enq-name">{{$allusers->name}}</span></a></td>
                                                    <td>{{$allusers->email}}</td>
                                                    <td><a href="{{ url('adminpanel/users/editusers') }}/{{$allusers->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                                    <td><a href="{{ url('adminpanel/users/delete') }}/{{$allusers->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            {{ $CurrentUsers->links() }}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection