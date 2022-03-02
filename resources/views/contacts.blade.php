<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <header>
        <div class="d-flex justify-content-center py-2 bg-primary">
            <h3 class="mx-4"><a class="text-light" href="/">Home</a></h3>
            <h3 class="mx-4"><a class="text-light" href="contacts">Contacts</a></h3>
            <h3 class="mx-4"><a class="text-light" href="team">Team</a></h3>
        </div>
    </header>
    <main>
        <div class="row justify-content-center mt-4">
            <div class="col-4 p-4 border border-dark">
               @foreach ($azienda as $key => $item)
                   <h5>{{$key}}: <span class="fs-5 fw-normal">{{$item}}</span></h5>
               @endforeach
        </div>
    </main>
</body>
</html>
