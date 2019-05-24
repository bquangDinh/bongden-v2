@extends('layouts.main')

@section('title')
Hello
@endsection

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/reading.css') }}">
@endsection

@section('main-content')
<div class="article-cover">
  <div class="article-cover__image">
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/be832922391491.58c25558f0fe7.gif">
  </div>
  <div class="article-cover__mask">
  </div>
  <div class="article-cover__lowerside d-none d-lg-block">

  </div>
</div>
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-2">

    </div>
    <div class="col-8">
      <div class="article-title">
        An Interview with Marion Damiens, Senior UX Researcher at BlaBlaCar
      </div>

      <div class="article-type d-flex justify-content-center mt-4">
        <a href="#">Toan Hoc</a>
      </div>

      <div class="article-content mt-5">
        How did you get into Research?

When I was a student, I used to work for a marketing research company, helping them with recruiting participants and taking notes during focus groups and individual interviews. I was very fascinated by the job of the researcher.

Once my study was done, I started as an intern and then as a permanent employee for another marketing research company. As we were only few employees, I had the chance to be involved very quickly on all different aspects of projects and starting to moderate my first one-to-one interviews and focus groups! This agency was working very closely with the subsidiary of the French retail network, SNCF, selling tickets and passes online, and I had the chance to run usability tests for them about a new sign-up flow on the app. This was the beginning of my romance with UX and user research.

Then I worked at Axance, the pioneer UX agency in France, as a UX researcher. I had the chance to learn and experiment most of UX research methodologies in several years, working for instance with Disneyland Paris, Google, PayPal and many more.

Finally I joined BlaBlaCar few months ago, with the willingness to work closer with product and design teams.
What does your role entail as Senior User Researcher? What are your key goals?

The first thing I worked on when I started at BlaBlacar was to build and manage a network of internal and external partners across our key markets (Russia, Brazil, Germany, Spain, Italy, France, Poland…) to deliver research on a wide range of products.

Our key goal here was to be able to run research, mostly usability tests, every 2 weeks limiting both efforts and costs, so that the product & experience team get insights on their work as soon as they need it.

On a daily basis, my role is to help product managers and designers identify appropriate research and design methodology that best align with project needs; and then to manage the research projects from the brief to the final analysis.

What’s the structure of your team like?

Our team is split into product management and User Experience, with the product management team organized around product lines and user experience team organized partially around product lines and partially around transversal expertise (Content & Research). Which means, I am working with all the product lines (Carpool – Insurance – Commuting – etc.) and their several topics, which makes my job even more rich and stimulating.

Right now, I’m the only UX researcher on the team, hence the need to work with external agencies to help me on several aspects I can’t do remotely. For example, the recruitment of local participants, facilities and set-up, local moderation etc.
What’s your process like for each new project?

Let’s use global usability tests as an example here. It starts with a brief coming in from the product line: where the product manager and UX designer work explain the context, the goals to achieve and the decision to be made following the research.

I then organize a kick-off to discuss the brief, target audience to interview, planning and involve all the project team on it to challenge.

Once we agree on the ‘What’ and the ‘Why’, we work on the ‘How’: I take care of briefing the external agency on the project, moderation, facilities & set-up aspect and so on, while the UX designer works on the screens and prototype. On D-day, I make sure that the whole team can follow the sessions live and remotely, we usually spend the whole day watching the tests together and debriefing with the agency as we go along. Finally, I deliver a recap of the project and the insights we got to help the team in making decisions.
How do you work with the design team?

I would say I am constantly working hand-in-hand with UX designers. Our design studio, as we call it at BlaBlaCar, is composed of UX designers, a content strategist and a UX researcher.
      </div>
    </div>
    <div class="col-2">

    </div>
  </div>

  <div class="comment-container mt-5">
    <div class="row">
      <div class="col-md-2 d-none d-lg-block">

      </div>
      <div class="col-md-8 col-12">
        <div class="user-comment-container">
          <div class="row">
            <div class="col-md-1 col-2">
              <img src="https://www.logolynx.com/images/logolynx/03/039b004617d1ef43cf1769aae45d6ea2.png" class="user-logo">
            </div>
            <div class="col-md-11 col-10">
              <div class="user-name">
                Bui Quang Dinh
              </div>
              <textarea id="comment-box__input" class="comment-box__input shadow-hover mt-2" placeholder="Enter your comment"></textarea>
              <div style="width: 100%;display:flex;justify-content: flex-end" class="mt-2">
                <button id="send-comment-btn">send</button>
              </div>
            </div>
          </div>
        </div>

        <hr>

        <div class="user-commented-list">
          <div class="user-comment-container">
            <div class="row">
              <div class="col-md-1 col-2">
                <img src="https://www.logolynx.com/images/logolynx/03/039b004617d1ef43cf1769aae45d6ea2.png" class="user-logo">
              </div>
              <div class="col-md-11 col-10">
                <div class="user-name">
                  Bui Quang Dinh
                </div>
                <textarea class="comment-box__input shadow-hover mt-2" readonly></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 d-none d-lg-block">

      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection
