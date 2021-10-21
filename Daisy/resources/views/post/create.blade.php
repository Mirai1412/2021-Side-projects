<!DOCTYPE html>
<html>
    <head>
    </head>
    <body >
        <h1>글작성</h1>
        <a href="{{ route('home') }}"><button >메인 바로가기</button>
        </a>
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <p>제목</p>
            <input type="text" name="title" placeholder="title">
            <p>내용</p>
            <input type="text" name="content" placeholder="content">
        </form>
        <br>
        <button>작성</button>
        <p>수정</p>
        <p>삭제</p>
    </body>
</html>
