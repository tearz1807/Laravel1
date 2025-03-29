@extends('layout.app')

@section('content')

  <div class="navbar">
    @include('navbar')
  </div>

  <div class="first-page">
    @include('first-page')
  </div>

  <div class="second-page">
    @include('second-page')
  </div>

  <div class="button">
    @include('button')
  </div>

@endsection

@section('scripts')
<script>
  import aboutImg from "../src/about-img.png";
  
  export default {
      data() {
          return {
              aboutImg,
              loginEmail: '',
              loginPassword: '',
              registerEmail: '',
              registerPassword: '',
              showScrollToTopBtn: false,
              isScrollingUp: false,
              lastScrollY: 0,
              isMobileMenuOpen: false
          };
      },
  
      methods: {
          handleLogin() {
              console.log('Вход с электронной почтой:', this.loginEmail);
          },
          handleRegister() {
              console.log('Регистрация с электронной почтой:', this.registerEmail);
          },
          scrollToTop() {
              window.scrollTo({
                  top: 0,
                  behavior: 'smooth'
              });
          },
          handleScroll() {
              const currentScrollY = window.scrollY;
              this.showScrollToTopBtn = currentScrollY > 0;
              this.isScrollingUp = currentScrollY < this.lastScrollY;
              this.lastScrollY = currentScrollY;
          },
          toggleMobileMenu() {
              this.isMobileMenuOpen = !this.isMobileMenuOpen;
              this.updateModalDisplay();
          },
          closeMobileMenu() {
              this.isMobileMenuOpen = false;
              this.updateModalDisplay();
          },
          updateModalDisplay() {
              const modal = document.getElementById('mobileMenuModal');
              if (modal) {
                  modal.style.display = this.isMobileMenuOpen ? 'flex' : 'none';
              }
          }
      },
  
      mounted() {
          window.addEventListener('scroll', this.handleScroll);
          const mobileMenuIcon = document.getElementById('mobileMenuIcon');
          const mobileMenuClose = document.getElementById('mobileMenuClose');
          if (mobileMenuIcon) {
              mobileMenuIcon.addEventListener('click', this.toggleMobileMenu);
          }
          if (mobileMenuClose) {
              mobileMenuClose.addEventListener('click', this.closeMobileMenu);
          }

          window.addEventListener('click', (event) => {
              const modal = document.getElementById('mobileMenuModal');
              if (modal && event.target === modal) {
                  this.closeMobileMenu();
              }
          });
      },
  
      beforeDestroy() {
          window.removeEventListener('scroll', this.handleScroll);
          const mobileMenuIcon = document.getElementById('mobileMenuIcon');
          const mobileMenuClose = document.getElementById('mobileMenuClose');
          if (mobileMenuIcon) {
              mobileMenuIcon.removeEventListener('click', this.toggleMobileMenu);
          }
          if (mobileMenuClose) {
              mobileMenuClose.removeEventListener('click', this.closeMobileMenu);
          }
      }
  };
</script>
@endsection

@section('styles')
  <style>
    @media (max-width: 1322px) {
    .navbar {
        .container-fluid {
            .logo {
                margin-left: 20px;
            }

            .center-buttons,
            .left-buttons {
                display: none;
            }

            .mobile-menu-icon {
                display: block;
            }
        }
      }
    }

    @media (max-width: 1421px) {
      .cards {
        justify-content: center;
        flex-wrap: wrap;
      }

      .card {
        width: 100%;
        max-width: 340px;
        margin: 10px 0;
      }
    }

    @media (max-width: 1240px) {
        .container {
            flex-direction: column;
            align-items: center;
        }

        .missison {
            margin-right: 0;
            width: 100%;
        }

        .image-container {
            flex: 0 0 auto;
            margin-top: 20px;
            text-align: center;

            img {
                margin-top: 0;
                max-width: 100%;
                width: auto;
            }
        }
    }

    @media (max-width: 666px) {
        .missison {
            .cards-container {
                flex-direction: column;
                align-items: center;

                .card {
                    width: 100%;
                    margin: 10px 0;
                }
            }
        }
    }


  </style>
@endsection
