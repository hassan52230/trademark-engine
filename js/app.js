const { useState } = React;

function Rating({ rating }) {
    return (
        <div className="flex items-center gap-2">
            <div className="flex">
                {[...Array(5)].map((_, i) => (
                    <svg key={i} className={`w-4 h-4 ${i < Math.floor(rating) ? 'text-yellow-400' : 'text-gray-300'}`} fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                ))}
            </div>
            <span className="text-sm text-gray-600">{rating} out of 5</span>
        </div>
    );
}

function PricingCard({ title, price, features, isPopular = false }) {
    return (
        <div className={`bg-white rounded-xl shadow-lg p-8 ${isPopular ? 'border-2 border-blue-500' : ''}`}>
            <h3 className="text-xl font-bold mb-2">{title}</h3>
            <div className="text-4xl font-bold mb-6">${price}</div>
            <ul className="space-y-4 mb-8">
                {features.map((feature, index) => (
                    <li key={index} className="flex items-start gap-3">
                        <svg className="w-5 h-5 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span className="text-gray-600">{feature}</span>
                    </li>
                ))}
            </ul>
            <button className={`w-full py-3 px-4 rounded-lg font-semibold ${isPopular ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-800'}`}>
                Get Started
            </button>
        </div>
    );
}

function TrademarkApp() {
    return (
        <div className="min-h-screen">
            {/* Hero Section */}
            <section className="bg-white py-16 lg:py-20">
                <div className="container mx-auto px-4">
                    <div className="flex flex-wrap items-center">
                        <div className="w-full lg:w-1/2 mb-10 lg:mb-0">
                            <h1 className="text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                                On your (trade)mark.<br />
                                Get set. Start your<br />
                                engine... Register your mark!
                            </h1>
                            <div className="mb-8">
                                <Rating rating={4.5} />
                            </div>
                            <button className="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-lg font-semibold">
                                Start Your Search
                            </button>
                        </div>
                        <div className="w-full lg:w-1/2">
                            {/* Image placeholder */}
                            <div className="bg-gray-100 rounded-lg aspect-video"></div>
                        </div>
                    </div>
                </div>
            </section>

            {/* How It Works */}
            <section className="py-16 bg-gray-50">
                <div className="container mx-auto px-4">
                    <h2 className="text-3xl font-bold text-center mb-12">How Trademark Engine Works</h2>
                    <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div className="text-center">
                            <div className="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span className="text-orange-500 font-bold">1</span>
                            </div>
                            <h3 className="font-bold mb-2">Search Your Mark</h3>
                            <p className="text-gray-600">Comprehensive search of existing trademarks</p>
                        </div>
                        <div className="text-center">
                            <div className="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span className="text-orange-500 font-bold">2</span>
                            </div>
                            <h3 className="font-bold mb-2">Complete Application</h3>
                            <p className="text-gray-600">Simple step-by-step process</p>
                        </div>
                        <div className="text-center">
                            <div className="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span className="text-orange-500 font-bold">3</span>
                            </div>
                            <h3 className="font-bold mb-2">File & Monitor</h3>
                            <p className="text-gray-600">We handle the filing process</p>
                        </div>
                    </div>
                </div>
            </section>

            {/* Pricing Section */}
            <section className="py-16 bg-navy-900">
                <div className="container mx-auto px-4">
                    <h2 className="text-3xl font-bold text-center text-white mb-12">Start protecting your business today</h2>
                    <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <PricingCard
                            title="Basic Search"
                            price="49"
                            features={[
                                "Comprehensive trademark search",
                                "Search report within 24 hours",
                                "Basic guidance included"
                            ]}
                        />
                        <PricingCard
                            title="Standard Package"
                            price="299"
                            features={[
                                "Everything in Basic",
                                "Full application filing",
                                "Ongoing support"
                            ]}
                            isPopular={true}
                        />
                        <PricingCard
                            title="Premium Package"
                            price="539"
                            features={[
                                "Everything in Standard",
                                "Priority processing",
                                "Attorney review included"
                            ]}
                        />
                    </div>
                </div>
            </section>

            {/* Testimonials */}
            <section className="py-16">
                <div className="container mx-auto px-4">
                    <div className="max-w-3xl mx-auto text-center mb-12">
                        <div className="mb-4">
                            <Rating rating={4.5} />
                        </div>
                        <h2 className="text-2xl font-bold mb-2">
                            Trademark Engine is rated 4.5 out of 5 based on 31,500 reviews.
                        </h2>
                    </div>
                </div>
            </section>

            {/* Stats */}
            <section className="py-16 bg-gray-50">
                <div className="container mx-auto px-4">
                    <div className="grid grid-cols-3 gap-8 text-center">
                        <div>
                            <div className="text-3xl font-bold text-navy-900 mb-2">120k+</div>
                            <p className="text-gray-600">Trademark applications</p>
                        </div>
                        <div>
                            <div className="text-3xl font-bold text-navy-900 mb-2">3,500+</div>
                            <p className="text-gray-600">Active registrations</p>
                        </div>
                        <div>
                            <div className="text-3xl font-bold text-navy-900 mb-2">4,900+</div>
                            <p className="text-gray-600">Trademark searches</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    );
}

ReactDOM.render(
    <TrademarkApp />,
    document.getElementById('trademark-app')
); 