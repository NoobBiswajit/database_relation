<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>



    <div class="container mt-5">
        <h2>Forcword case One To Many</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>


                </tr>
            </thead>
            <tbody>

                @foreach ($stdinfos as $stdinfo)
                    <tr>
                        <td>{{ $stdinfo->name }}</td>
                        <td>{{ $stdinfo->email }}</td>


                        <td>
                            @foreach ($stdinfo->stdinfoNum as $phone)
                                {{ $phone->stdNumbers . ',' }}
                            @endforeach
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    <div class="container mt-5">
        <h2>Backword case Many to One</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Phone</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>



                </tr>
            </thead>
            <tbody>

                @foreach ($stdNums as $stdNum)
                    <tr>

                        <td>
                            {{ $stdNum->stdNumbers }}
                        </td>
                        <td>{{ $stdNum->stdinfo->name }}</td>
                        <td>{{ $stdNum->stdinfo->email }}</td>



                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
