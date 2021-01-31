@extends('admin.layouts.app')

@section('content')
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
                        </li>
                        <li class="active-bre"><a href="#"> تعديل الاعضاء</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>تعديل تفاصيل الاعضاء</h4>
                                </div>

                                @if (session('msg'))
                                    <div class="msg_box">
                                        {{ session('msg') }}
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @foreach ($EditUsers as $userdetails)
                                <div class="tab-inn">
                                    <form action="/adminpanel/users/updateUser" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$userdetails->id}}">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="first_name" type="text" value="{{$userdetails->name}}" name="name" class="validate">
                                                <label for="first_name">اسم المستخدم</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="password" type="password" value="" name="password" class="validate">
                                                <label for="password" style="text-align: right;">كلمة السر</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="password1" type="password" value="" name="password_confirmation" class="validate">
                                                <label for="password1" style="text-align: right;">تاكيد كلمة السر</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" value="{{$userdetails->email}}" name="email" class="validate">
                                                <label for="email">البريد الالكترونى</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select name="admin">
                                                    <?php
                                                        if ($userdetails->admin == 1) {
                                                            $type = 'مدير';
                                                        }
                                                        else {
                                                            $type = 'موظف';
                                                        }
                                                    ?>
                                                    <option value="" disabled selected>صلاحيات المستخدم الحالية : {{$type}}</option>
                                                    <option value="1">مدير</option>
                                                    <option value="2">موظف</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12" style="text-align: right;">
                                                <input type="submit" class="waves-effect waves-light btn-large" value="تعديل">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection