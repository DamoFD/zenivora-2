const root = document.documentElement;

const setMarquee = (marqueeSelector, isReverse) => {
  const marqueeContent = document.querySelector(marqueeSelector);
  let posX = 0;
  const speed = 1;
  const elementWidth = parseFloat(getComputedStyle(root).getPropertyValue("--marquee-element-width"));
  const totalElements = parseFloat(getComputedStyle(root).getPropertyValue("--marquee-elements"));

  const animate = () => {
    if (isReverse) {
      posX += speed; // Move to the right for reverse marquee
    } else {
      posX -= speed; // Move to the left for forward marquee
    }

    // Reset position to start if it reaches the end
    if (Math.abs(posX) > elementWidth * totalElements) {
      posX = 0;
    }

    marqueeContent.style.transform = `translateX(${posX}px)`;
    requestAnimationFrame(animate);
  };

  requestAnimationFrame(animate);
};

// Clone elements for the first marquee (assuming you want to do this for both)
const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
const marqueeContentForward = document.querySelector("#marquee-content-forward");

root.style.setProperty("--marquee-elements", marqueeContentForward.children.length);

for (let i = 0; i < marqueeElementsDisplayed; i++) {
  marqueeContentForward.appendChild(marqueeContentForward.children[i].cloneNode(true));
}

// Clone elements for the second marquee
const marqueeContentReverse = document.querySelector("#marquee-content-reverse");
for (let i = 0; i < marqueeElementsDisplayed; i++) {
  marqueeContentReverse.appendChild(marqueeContentReverse.children[i].cloneNode(true));
}

// Set up the marquees
setMarquee("#marquee-content-forward", false); // forward
setMarquee("#marquee-content-reverse", true);  // reverse

