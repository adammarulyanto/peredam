<style>
.bg-video-wrap {
  position: relative;
  overflow: hidden;
  width: 100%;
  height: 100vh;
  background: url(https://designsupply-web.com/samplecontent/vender/codepen/20181014.png) no-repeat center center/cover;
}
video {
  min-width: 100%;
  min-height: 100vh;
  z-index: 1;
}
.overlay {
  width: 100%;
  height: 100vh;
  position: absolute;
  top: 0;
  left: 0;
  background-image: linear-gradient(45deg, rgba(0,0,0,.3) 50%, rgba(0,0,0,.7) 50%);
  background-size: 3px 3px;
  z-index: 2;
}
* {
  box-sizing: border-box;
}

:root {
  font-size: 18px;
  font-family: -apple-system,
    BlinkMacSystemFont,
    "Segoe UI",
    Roboto,
    Oxygen-Sans,
    Ubuntu,
    Cantarell,
    "Helvetica Neue",
    sans-serif;
  font-weight: 300;
  line-height: 1.55;
}

html,
body,
main {
  margin: 0;
  padding: 0;
  height: 100%;
}

h1,
h2,
h3,
h4,
h5,
h6,
p {
  margin-top: 0;
}

h1 {
  font-size: 4rem;
}

header {
  position: sticky;
  top: 0;
  height: 80px;
  background-color: white;
  box-shadow: 0 16px 16px -8px #0001;
}

button {
  padding: 12px 16px;
  color: white;
  background-color: black;
  border: none;
  border-radius: 6px;
}

.flex-center {
  display: flex;
  justify-content: center;
  align-items: center;
}

.flex-col {
  flex-direction: column;
}

section {
  height: 100%;
  max-height: 100vh;
  background-color: transparent;
}

.slide-data {
  gap: 2rem;
}

.slide-data * {
  margin: 0;
}

.big-white-sheet-of-paper {
  background-color: white;
}

.slide-bg {
  position: fixed;
  width: 100%;
  display: flex;
  justify-content: center;
  left: 0;
  z-index: -1;
}

.slide-bg > video,
.slide-bg > img {
  height: 100%;
  object-fit: cover;
}
</style>
<main>
  <section class="flex-center">
    <div class="slide-bg" data-parallax>
      <div class="bg-video-wrap">
	    <video src="https://designsupply-web.com/samplecontent/vender/codepen/20181014.mp4" loop muted autoplay>
	    </video>
	    <div class="overlay">
	    </div>
	  </div>
    </div>
    <div class="slide-data flex-center flex-col">
      <h1>Super-sized heading</h1>
      <div class="slide-description">Some description</div>
      <div class="slide-cta">
        <button type="button">And of course, call to action</button>
      </div>
    </div>
  </section>
  <section class="big-white-sheet-of-paper flex-center">
    Pure whiteness
  </section>
</main>
<script type="text/javascript">
	const parallaxElements = document.querySelectorAll('[data-parallax]');

window.addEventListener('scroll', () => {
  const y = window.scrollY;
  parallaxElements.forEach((el) => {
    const top = el.offsetTop;
    el.style.transform = `translateY(-${ (y > top) ? y / 5 : 0 }px)`;
  });
});
</script>