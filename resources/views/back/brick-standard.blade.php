@if(Request::is('dashboard/news'))
        <thead>
            <tr>
                <td class="widthbutton">&nbsp;</td>
                <td class="widthbutton">&nbsp;</td>
                <td>Title</td>
                <td>Information</td>
            </tr>  
        </thead>
        <tbody id="pannel" class="back-pannel">
        @foreach($news as $news)
            <tr>
                <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$news->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{ route('news.edit', $news->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td>{{$news->title}}</td>
                <td class="content info_sec">{{$news->information}}</td>
            </tr>
        @endforeach
        </tbody>
@endif

@if(Request::is('dashboard/gallery'))
        <thead>
            <tr>
                <td class="widthbutton">&nbsp;</td>
                <td class="widthbutton">&nbsp;</td>
                <td>Image</td>
                <td>Image url</td>
            </tr>  
        </thead>
        <tbody id="pannel" class="back-pannel">
        @foreach($galleries as $gallery)
                <tr>
                    <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$gallery->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                    <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href=""><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    <td><img src="{{ asset('images/' . $gallery->image)}}" alt=""></td>
                    <td>{{$gallery->image}}</td>
                </tr>
        @endforeach
@endif

@if(Request::is('dashboard/contact'))
        <thead>
            <tr>
                <td class="widthbutton">&nbsp;</td>
                <td class="widthbutton">&nbsp;</td>
                <td>Name</td>
                <td>Telephone</td>                            
                <td>Created_at | Yaratilingan Sana</td>
            </tr>  
        </thead>
        <tbody id="pannel">
        @foreach($contacts as $contact)
            <tr>
                <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$contact->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href=""><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->telephone}}</td>
                <td>{{$contact->created_at}}</td>
            </tr>
        @endforeach
@endif

@if(Request::is('dashboard/user'))
        <thead>
            <tr>
                <td class="widthbutton">&nbsp;</td>
                <td class="widthbutton">&nbsp;</td>
                <td>Id</td>
                <td>Name</td>                            
                <td>Role</td>
                <td>Email</td>
            </tr>  
        </thead>
        <tbody id="pannel">
        @foreach($users as $user)
            <tr>
                <td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$user->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href=""><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
@endif
