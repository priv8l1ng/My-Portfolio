import {https} from './https';

// const https = require('https');

class RENExchange {
    // build with <3 from rensmt
    constructor() {
        this.hostname = "api.pancakeswap.info"
        this.imghostname = "pancakeswap.finance"
        this.ep = { // V2 PackageSwap
            "getToken": "/api/v2/tokens",
            "pairsDetail": "/api/v2/pairs",
            "getTokenByAddress": "/api/v2/tokens/",
            "getImageToken": "/images/tokens/"
        }
        this.suiAddress = "0x4841181ae4079072ebe83a29b718388a387169e3"
    }
    async getAllToken() {
        return new Promise((resolve) => {
            var options = {
                host: this.hostname,
                port: 443,
                path: this.ep.getToken,
                method: 'GET'
            };
            const req = https.request(options, (res) => {
                let ret = '';
                res.on('data', (chunk) => {
                    ret += chunk;
                });
                res.on('end', () => {
                    resolve(JSON.parse(ret).data);
                });
            });
            req.end();
        })
    }
    async getPairsDetail() {
        return new Promise((resolve) => {
            var options = {
                host: this.hostname,
                port: 443,
                path: this.ep.pairsDetail,
                method: 'GET'
            };
            const req = https.request(options, (res) => {
                let ret = '';
                res.on('data', (chunk) => {
                    ret += chunk;
                });
                res.on('end', () => {
                    resolve(JSON.parse(ret).data);
                });
            });
            req.end();
        })
    }
    async getAvailablePairs(tokenAddress) {
        let newPairs = {};
        let pd = await this.getPairsDetail();
        for (var ta in pd) {
            if (ta.split('_')[0] == tokenAddress) {
                newPairs[ta] = pd[ta];
            }
        }
        return newPairs;
    }
    async getImageFromAddressToken(tokenAddress) {
        return new Promise((resolve) => {
            var options = {
                host: this.imghostname,
                port: 443,
                path: this.ep.getImageToken + tokenAddress + ".png",
                method: 'GET'
            };
            const req = https.request(options, (res) => {
                if (res.statusCode == 404) {
                    resolve({"status": 404, "url_img": "none"});
                } else {
                    resolve({"status": 200, "url_img": "https://" + this.imghostname + this.ep.getImageToken + tokenAddress + ".png"});
                }
            });
            req.end();
        })
        //return "https://" + this.imghostname + this.ep.getImageToken + tokenAddress + ".png"
    }
    // Special
    async getSuiDetails() {
        return new Promise((resolve) => {
            var options = {
                host: this.hostname,
                port: 443,
                path: this.ep.getTokenByAddress+this.suiAddress,
                method: 'GET'
            };
            const req = https.request(options, (res) => {
                let ret = '';
                res.on('data', (chunk) => {
                    ret += chunk;
                });
                res.on('end', () => {
                    resolve(JSON.parse(ret).data);
                });
            });
            req.end();
        })
    }
}

exports.RENExchange = RENExchange;

