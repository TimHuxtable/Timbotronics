const puppeteer = require('puppeteer');
var http = require("http");

async function main() {
    const browser = await puppeteer.launch({headless: true});
    const page = await browser.newPage();
    await page.setViewport({
        width:2560,
        height:1440
    });

    let link = "https://www.amazon.com/beyerdynamic-Over-Ear-Studio-Headphones-construction/dp/B0011UB9CQ/ref=sr_1_3";

    await page.goto(link);
     const navigationPromise = page.waitForNavigation({waitUntil: "domcontentloaded"});
//    await page.waitForSelector("#corePrice_feature_div > div > span > span:nth-child(2)", {timeout:10000});
await navigationPromise;
    let element = await page.$("#corePrice_feature_div > div > span > span:nth-child(2)");
    let price = await page.evaluate(el => el.textContent, element);
    let titleElement = await page.$("#productTitle");
    let title = await page.evaluate(el => el.textContent, titleElement);
    await browser.close();
    console.log(price);
    await logPrice(price, link, title);
}

function sleep(ms) {
    return new Promise((resolve) => {
        setTimeout(resolve, ms);
    });
}



main();


async function logPrice(price, link, item) {
    const data = JSON.stringify({
        price: price,
        link: link,
        item: item

    });

    const options = {
        hostname: 'timbotronics.xyz',
        path: '/amazonBot/prices.php',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Content-Length': data.length
        }
    };

    const req = http.request(options, (res) => {
        let data = '';

        res.on('data', (chunk) => {
            data += chunk;
        });

        res.on('end', (response) => {
            console.log(data);
        });

    }).on("error", (err) => {
        console.error(err)
    });

    req.write(data);
    req.end();
}

