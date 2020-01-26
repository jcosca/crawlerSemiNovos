# crawler
 
This API will provide an endpoint that will take an optional JSON with the filters to the desired search of vehicles and return the result also in JSON format:

endpoints:
<basepath>/seminovos/moto
<basepath>/seminovos/carro
<basepath>/seminovos/caminhao
 
 JSON example:
 {
	"marca":"fiat",
	"modelo":"palio",
	"ano_de":2008,
	"ano_ate":2012,
	"preco_de":1000,
	"preco_ate":30000,
	"particular":false,
	"revenda":false,
	"novo":false,
	"semi_novo":false
}

JSON answer example:
[
    {
        "productID": "2688378",
        "sku": "2688378",
        "url": "https://seminovos.com.br/fiat-palio-2008-2009--2688378?dados=eyJjb25zdWx0YVBhcmFtcyI6eyJ0aXBvIjoxLCJtYXJjYSI6IjE4IiwibW9kZWxvIjoiMTEyIiwiaWRUaXBvIjoxLCJwcmVjb0RlIjoiMTAwMCIsInByZWNvQXRlIjoiMzAwMDAiLCJhbm9EZSI6IjIwMDgiLCJhbm9BdGUiOiIyMDEyIiwicmVnaXN0cm9zUGFnaW5hIjoyMCwicGFnaW5hQXR1YWwiOjEsIm9jdWx0YXJWYWxvckFDb21iaW5hciI6ZmFsc2UsIm9jdWx0YXJGaW5hbmNpYW1lbnRvIjpmYWxzZSwib3JkZW5hclBvciI6bnVsbCwib3JkZW0iOjEsIm1vdG9yZXMiOlsiMS4wIiwiMS4zIiwiMS40IiwiMS41IiwiMS42IiwiMS44Il19LCJ2ZWljdWxvSW5kaWNlIjowLCJyZXN1bHRhZG9EZUJ1c2NhIjp7InBhZ2VzIjoxLCJ0b3RhbCI6MSwiY3VycmVudCI6MSwicm91dGVOYW1lIjoiaHR0cHM6XC9cL3NlbWlub3Zvcy5jb20uYnIiLCJyb3V0ZVBhcmFtcyI6IlwvY2Fycm9cL2ZpYXRcL3BhbGlvXC9hbm8tMjAwOC0yMDEyXC9wcmVjby0xMDAwLTMwMDAwIiwicGFnaW5hdGlvbiI6dHJ1ZSwicGFnaW5hdGlvblJlc3VsdGFkbyI6dHJ1ZSwicm91dGVQYXJhbXNBcnJheSI6eyJ0aXBvIjoiY2Fycm8iLCJtYXJjYSI6ImZpYXQiLCJtb2RlbG8iOiJwYWxpbyIsImFubyI6IjIwMDgtMjAxMiIsInByZWNvIjoiMTAwMC0zMDAwMCJ9fSwidXJsQnVzY2EiOiJcL2NhcnJvXC9maWF0XC9wYWxpb1wvYW5vLTIwMDgtMjAxMlwvcHJlY28tMTAwMC0zMDAwMCJ9",
        "bodyType": "Hatch Compacto",
        "brand": "Fiat",
        "model": "Palio",
        "name": "Fiat Palio",
        "description": "Fiat Palio Bi-Combustível a venda na Seminovos.com por apenas R$ 13.000,00",
        "mileageFromOdometer": "0",
        "offers": "13000.00 2020-01-24",
        "price": "13000.00",
        "priceCurrency": "BRL",
        "priceValidUntil": "2020-01-24",
        "availability": "",
        "image": "https://carros.seminovosbh.com.br/fiat/palio/2008/2009/2688378/359c183f2ea3f5c9cbed9a69d379dc744c0"
    }
]
