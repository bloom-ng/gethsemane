<!DOCTYPE html>
<html>
    <head>
        <title>Export Member Data</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/css/styles.css" rel="stylesheet" />

        <style>
            table{width:100%; border-collapse: collapse; 
            }
            table, th, td{border:1px solid black;}
            th, td{padding:8px;}


         </style>
    </head>

    <body>
        <h2 class="text-center my-2">List of Members.</h2> 

        
        <div class="container-fluid">
            <table class="table table-bordered " >
                <thead>
                    <tr class="">
                        <th>#</th>
                        <th>Surname</th>
                        <th>First Name</th>
                        <th>Other Name</th>
                        <th>Phone</th>
                        <th>State</th>
                        <th>Specialization</th>
                        <th>Title</th>
                        <th>Year of<br/> Last Ordination</th>
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