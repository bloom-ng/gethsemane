<!DOCTYPE html>
<html>
    <head>
        <title>Export Member Data</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/css/styles.css" rel="stylesheet" />
        
    </head>

    <body>
        <h2 class="text-center my-2">List of Members.</h2> <hr/>

        <div class=" m-3 ">
            <a class="btn btn-primary     " href="/admin/members/export/pdf">Export to PDF</a>
            
        </div>
       
        <div class="container-fluid">
            <table class="table " >
                <thead>
                    <tr class="table-mute bg-primary text-white">
                        <td>#</td>
                        <td>Surname</td>
                        <td>First Name</td>
                        <td>Other Name</td>
                        <td>Phone</td>
                        <td>State</td>
                        <td>Area of Specialization</td>
                        <td>Title</td>
                        <td>Year of Last Ordination</td>
                    </tr>
                </thead>
                @forelse($members as $member)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$member->surname}}</td>
                        <td>{{$member->first_name}}</td>
                        <td>{{$member->other_name}}</td>
                        <td>{{$member->phone}}</td>
                        <td>{{$member->state}}</td>
                        <td>{{$member->area_of_spec}}</td>
                        <td>{{$member->title->name}}</td>
                        <td>{{$member->year}}</td>
                    </tr>

                @empty
                <p>No Member Enrolled</p>
                @endforelse

            </table>
        </div>

    </body>




</html>