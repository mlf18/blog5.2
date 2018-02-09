<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><span>eNno</span></a>
        </div>
        <div class="navbar-collapse collapse">							
            <div class="menu">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="{{isset($home) ? $home:''}}"><a href="{{ url('/') }}">Home</a></li>
                    <li role="presentation" class="{{isset($services) ? $services:''}}"><a href="{{ url('/services') }}">Services</a></li>
                    <li role="presentation" class="{{isset($blog) ? $blog:''}}"><a href="{{ url('/blog') }}">Blog</a></li>
                    <li role="presentation" class="{{isset($portofolio) ? $portofolio:''}}"><a href="{{ url('/portofolio') }}">Portfolio</a></li>
                    <li role="presentation" class="{{isset($contact) ? $contact:''}}"><a href="{{ url('/contact') }}">Contact</a></li>						
                </ul>
            </div>
        </div>			
    </div>
</nav>
