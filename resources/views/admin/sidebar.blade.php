<div class="container-fluid">
    <div class="sidebar" id="sidebar">
        <a href="#">Home</a>
        <a href="{{route('admin.manage-current-class')}}">Manage Current Class</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <button onclick="closeSidebar()"><i class="fa-solid fa-xmark"></i></button>
    </div>
        
    <div class="content">
        <button class="open-btn" onclick="openSidebar()"><i class="fa-solid fa-bars"></i></button>
    </div>
</div>