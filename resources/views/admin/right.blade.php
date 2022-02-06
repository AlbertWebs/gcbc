<div id="right">


            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Admin &nbsp; : <span><?php $Admins = DB::table('admins')->get(); $Count = count($Admins); echo $Count ?></span></li>
                    {{-- <li>Students &nbsp; : <span><?php $Users = DB::table('users')->get(); $Count = count($Users); echo $Count ?></span></li> --}}


                </ul>
            </div>
            <div class="well well-small">
                <button type="button" class="btn btn-block"> Versions Control </button>

                <button type="button" onclick="window.open('{{url('/admin/Sermons')}}','_self')" class="btn btn-success btn-block"> Sermons</button>
                <button type="button" onclick="window.open('{{url('/admin/blogs')}}','_self')" class="btn btn-info btn-block"> Events </button>
                <button type="button" onclick="window.open('{{url('/admin/events')}}','_self')" class="btn btn-info btn-block"> Calendar </button>
                <button type="button" onclick="window.open('{{url('/admin/slider')}}','_self')" class="btn btn-info btn-block"> Slider </button>
                <button type="button" onclick="window.open('{{url('/admin/admins')}}','_self')" class="btn btn-success btn-block"> Admins</button>

                <button type="button" onclick="window.open('{{url('/admin/ministries')}}','_self')" class="btn btn-info btn-block"> Ministries</button>

                <button type="button" onclick="window.open('{{url('/admin/banner')}}','_self')" class="btn btn-primary btn-block"> Banners</button>
                <button type="button" onclick="window.open('{{url('/admin/categories')}}','_self')" class="btn btn-warning btn-block"> Categories</button>

                <button type="button" onclick="window.open('{{url('/admin/notifications')}}','_self')" class="btn btn-danger btn-block"> Notifications </button>

                {{-- <button type="button" onclick="window.open('{{url('/admin/updates')}}','_self')" class="btn btn-block"> Updates </button> --}}

            </div>



        </div>
