const puppeteer = require("puppeteer-extra");
const fs = require("fs");
const StealthPlugin = require('puppeteer-extra-plugin-stealth');
puppeteer.use(StealthPlugin());

async function run() {
  const browser = await puppeteer.launch();
  const page = await browser.newPage();
//await page.setUserAgent(userAgent.toString());
    await page.goto("https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/");
    // hacky defensive move but I don't know a better way:
    // wait a bit so that the browser finishes executing JavaScript
    await page.waitFor(1 * 1000);
    const html = await page.content();
    fs.writeFileSync("index.html", html);
    await browser.close();
}

run();
