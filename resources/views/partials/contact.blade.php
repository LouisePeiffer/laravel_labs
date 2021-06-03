<!-- contact form -->
<div class="col-md-6 col-pull">
    <form class="form-class" id="con_form" method="POST">
        @csrf
        <div class="row">
            {{-- Name --}}
            <div class="col-sm-6">
                <input type="text" name="name" id="name" placeholder="Your name">
            </div>
            {{-- Email --}}
            <div class="col-sm-6">
                @guest
                    <input type="email" name="email" id="email" placeholder="Your email">
                @endguest
            </div>
            <div class="col-sm-12">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button class="site-btn">send</button>
            </div>
        </div>
    </form>
</div>