<!-- contact form -->
<div class="col-md-6 col-pull">
    <form class="form-class" id="con_form" method="POST" action="{{route('mailstore')}}">
        @csrf
        <div class="row">
            {{-- Name --}}
            <div class="col-sm-6">
                <input type="text" name="name" id="name" placeholder="Your name">
            </div>
            {{-- Email --}}
            <div class="col-sm-6">
                @guest
                    <input type="email" name="mail" id="mail" placeholder="Your email">
                @endguest
                @auth
                    <input type="email" name="mail" id="mail" placeholder="Your email" value={{Auth::User()->email}}>
                @endauth
            </div>
            {{-- Subject --}}
            <div class="col-sm-12">
                <select name="subject" id="subject" placeholder="Subject">
                    <option value="">--- Select a subject ---</option>
                    @foreach ($subjects as $subject)
                        <option value="{{$subject->subject}}">{{$subject->subject}}</option>
                    @endforeach
                </select>
            </div>
            {{-- Message --}}
            <div class="col-sm-12">
                <textarea name="message" id="message" placeholder="Message"></textarea>
                <button class="site-btn" type="submit">Send</button>
            </div>
        </div>
    </form>
</div>