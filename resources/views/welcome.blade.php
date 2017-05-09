<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <META http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
    <body>
        <div>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
        </div>
        <div>
            <form action="{{route('course.save') }}" method="post">
            <label>Select a category</label>	
            	<select>
            	    @foreach ($categories -> as $category)
            	    <option>{{ $category}}</option>
            	    @foreach
            	</select>
            	<br><br>
            <label>Select a subcategory</label>
            <select>
                @foreach ($subcategories as $subcategory)
                <option>{{ $subcategory}}</option>
                @endforeach
            </select>
            <br><br>
            
            <label for="course">Course Name:</label>
            <input type="text" name="course" id="course"/>
            
            <div id="secs">
                <label for="section">Section 1:</label>
                <input type="text" name="section" id="section"/>
            </div>
            
            <div id="lects">
                <label for="lecture">Lecture 1:</label>
                <input type="text" name="lecture" id="lecture"/>
            </div>
            
            <button id="add-lect">Add New Lecture</button><br><br>
            <button id="add-sect">Add New Section</button>
            <br><br><br><br>
            
            <button class="btn-primary" type="submit">Save</button>
            </form>
        </div>
    </body>
</html>