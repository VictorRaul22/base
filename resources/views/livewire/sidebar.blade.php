<div class="sidebar">
  <div class="profile">
    <div class="logo">
      <img src="{{ Vite::asset('resources/image/logo-icon.svg') }}" alt="Logo">
      <span class="logo-txt">Teams.co</span>
    </div>
    <img src="{{ Vite::asset('resources/image/profile.svg') }}" class="profile-img" alt="Logo">

    <div class="profile-content">
      <h2 class="name text-white">Aman</h2>
      <span class="position text-white">Product Designer</span>
    </div>
  </div>

  <ul class="menu">
    <li class="list active">
      <a href="#dashboard" class="link">
        <img src="{{ Vite::asset('resources/image/icon-01.svg') }}" alt="icon">
        {{-- <img src="images/icon-01.svg" alt="icon" /> --}}
        <span>Dashboard</span>
      </a>
    </li>
    <li class="list">
      <a href="#teams" class="link">
        <img src="{{ Vite::asset('resources/image/icon-02.svg') }}" alt="icon">
        <span>Teams</span>
      </a>
    </li>
    <li class="list">
      <a href="#payments" class="link">
        <img src="{{ Vite::asset('resources/image/icon-03.svg') }}" alt="icon">
        <span>Payments</span>
      </a>
    </li>
    <li class="list">
      <a href="#attendance" class="link">
        <img src="{{ Vite::asset('resources/image/icon-04.svg') }}" alt="icon">
        <span>Attendance</span>
      </a>
    </li>
    <li class="list">
      <a href="#!" class="settings">
        <img src="{{ Vite::asset('resources/image/icon-05.svg') }}" alt="icon">
        <span>Settings</span>
      </a>
    </li>
  </ul>

  <div class="create-teams">
    <div class="create-teams-content">
      <img src="{{ Vite::asset('resources/image/icon-dot.svg') }}" alt="icon" alt="icon-dot">
      <img src="{{ Vite::asset('resources/image/create-team.svg') }}" alt="icon" alt="teams-icon">

      <h3 class="teams-title text-white">Create Teams</h3>
      <p class="teams-description text-dark">
        Increase your speed with more members
      </p>
    </div>
  </div>
</div>
@push('js')
  <script>
    let links = document.querySelectorAll('.list .link');
    let sections = document.querySelectorAll('section[id]');

    links.forEach((link) => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        let href = link.getAttribute('href');
        document.querySelector(`${href}`).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });

    window.addEventListener('scroll', () => {
      let scrollY = window.pageYOffset;
      sections.forEach((section) => {
        const sectionHeight = section.offsetHeight;
        const sectionTop = section.offsetTop - 200;
        const sectionId = section.getAttribute('id');
        if (scrollY > sectionTop && scrollY < sectionTop + sectionHeight) {
          document
            .querySelector(`.list a[href*="${sectionId}"]`)
            .parentElement.classList.add('active');
        } else {
          document
            .querySelector(`.list a[href*="${sectionId}"]`)
            .parentElement.classList.remove('active');
        }
      });
    });
  </script>
@endpush
