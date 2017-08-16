from mixpanel import Mixpanel

mp = Mixpanel('83af3c32b1c73c25bf7d5d420444a582')

mp.track ('user1','Product Viewed', {
	"product_id": "pr_507f1f77bcf86cd799439011",
	"sku": "G-32",
	"category": "Games",
	"name": "Monopoly: 3rd Edition",
	"brand": "Hasbro",
	"variant": "200 pieces",
	"price": 18.99,
	"quantity": 1
})

