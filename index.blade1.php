<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Input Range with Dynamic Label</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/range.css')}}">
</head>

<body>




    <div class="inputs mt-5">
        <div class="container">

            <div class="row ">
        <form id="form" action="{{ route('update') }}" method="POST">
                <div class="col-md-12 range-wrap range1 mt-4">
                    
                        
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$record->id}}">

                        <div class="text-center">

                        
                            <input name="cont1" type="range" min="1" max="30" value="{{$record->cont1}}" step="1">
                            <span class="value">{{$record->cont1}}</span>

                        </div>


                        <div class="text-center">

                        
                            <input name="cont2" type="range" min="1" max="30" value="{{$record->cont2}}" step="1">
                            <span class="value">{{$record->cont2}}</span>

                        </div>

                        <div class="text-center">

                        
                            <input name="cont3" type="range" min="1" max="30" value="{{$record->cont3}}" step="1">
                            <span class="value">{{$record->cont3}}</span>

                        </div>


                        <div class="text-center">

                        
                            <input name="cont4" type="range" min="1" max="30" value="{{$record->cont4}}" step="1">
                            <span class="value">{{$record->cont4}}</span>

                        </div>


                        <div class="text-center">

                        
                            <input name="cont5" type="range" min="1" max="30" value="{{$record->cont5}}" step="1">
                            <span class="value">{{$record->cont5}}</span>

                        </div>

                        <div class="text-center">

                        
                            <input name="cont6" type="range" min="1" max="30" value="{{$record->cont6}}" step="1">
                            <span class="value">{{$record->cont6}}</span>

                        </div>


                  </div>

                            <button type="submit" class="btn btn-primary mt-5">Save</button>
                    </form>
                

                
               
            </div>
        </div>

    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery-3.5.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/range.js')}}"></script>

        
    


 
</body>

</html>