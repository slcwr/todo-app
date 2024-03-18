<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="App\Http\bootstrap\app.css" rel="stylesheet">
    <title>ToDo List</title>
</head>

<body>
    <h1>ToDo List</h1>
    <form method="POST" action="{{ route('todo.store') }}">
        @csrf
        <label>Title</label>
        <input type="text" name="title">
        <br>
        <label>Description</label>
        <textarea name="description"></textarea>
        <br>
        <button type="submit" value="post">Add</button>
    </form>
    
    <ul>
        @foreach ($todos as $todo)
        <form method="DELITE" action="{{ route('todo.destroy', $todo->id) }}">
            @csrf
            @method('DELITE')
        <div>
        <table>
        <tr>
        <th><p class="parent"><input type="checkbox" name="todo[]">{{ $todo->title }} / {{ $todo->description }} / {{ $todo->id }} </p></th>
        <td><button type="submit" value="post">Remove</button></td>
        <tr>
        </table>
        </div>
        </form>
        @endforeach
    </ul>
   
        
    <script>  
        //複数のp要素に動的なidをつける
        //const moji = "testID"
        //const tmpclass = document.getElementsByClassName("parent") ;
        //const fuga = Array.prototype.slice.call(tmpclass);
        //function crossout() {
        //for(let i=0;i<=tmpclass.length-1;i++){
        //id追加
        //tmpclass[i].setAttribute("id",moji+i)
        //console.log(tmpclass[i]);

       // }
        //for(let i=0;i<=tmpclass.length-1;i++){
            //let tmpid = document.getElementById(moji+i) ; 
            //console.log(fuga[i]);
        //}
        //if(fuga[i].style.textDecoration == "line-through"){
            //fuga[i].style.textDecoration = "none";
            //}else{
                //fuga[i].style.textDecoration = "line-thsrough";
            //}
        
        //}

        let elements = document.querySelectorAll('p');
        const elementsArray = Array.from(elements);
        console.log(elementsArray);


        for(let i=0;i<=elements.length-1;i++){    
        elementsArray[i].addEventListener('change', function() {
            if(elementsArray[i].style.textDecoration == "line-through"){
                elementsArray[i].style.textDecoration = "none";
            }else{
                elementsArray[i].style.textDecoration = "line-through";
            }
        });

    }

    function deletePost(e) {
        if (confirm('本当に削除してもいいですか？')) {
            document.getElementById(('delete_' + e.dataset.id).submit());
        }
    }
    //}
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>