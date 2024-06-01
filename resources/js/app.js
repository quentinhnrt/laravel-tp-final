import "./bootstrap";
import barba from "@barba/core";
import barbaCss from "@barba/css";

barba.use(barbaCss);

const body = document.querySelector("body");
const style = getComputedStyle(body);

barba.hooks.before((data) => {
    const background = data.current.container.dataset.background;
    body.style.setProperty(
        "--transition-background",
        style.getPropertyValue(background),
    );
});

barba.init({
    transitions: [
        {
            name: "with-cover",
            to: {
                namespace: ["with-cover"],
            },
            leave() {},
            enter() {},
        },
    ],
});
