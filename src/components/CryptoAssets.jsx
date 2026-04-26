const cryptos = [
  { symbol: 'BTC',  name: 'Bitcoin',  price: 'Rp 950.000.000', change: '+0.36%', up: true,  img: '/img/btc.png',  w: '55px' },
  { symbol: 'ETH',  name: 'Ethereum', price: 'Rp 39.000.000',  change: '+1.12%', up: true,  img: '/img/Eth.png',  w: '40px' },
  { symbol: 'USDT', name: 'Tether',   price: 'Rp 15.900',      change: '-0.05%', up: false, img: '/img/usdt.png', w: '50px' },
  { symbol: 'SOL',  name: 'Solana',   price: 'Rp 2.100.000',   change: '+2.45%', up: true,  img: '/img/sol.png',  w: '40px' },
  { symbol: 'USDC', name: 'USD Coin', price: 'Rp 15.800',      change: '-0.02%', up: false, img: '/img/usdc.png', w: '40px' },
]

export default function CryptoAssets() {
  return (
    <section className="limatAset bg-white">
      <div className="container">

        <div className="d-flex justify-content-between align-items-center mb-4">
          <h2 className="fw-bolder mb-0">5 Aset Crypto Populer</h2>
          <div className="lihat-semua-btn border border-secondary rounded-pill px-4 py-2"
               style={{ cursor: 'pointer' }}>
            <span className="fw-semibold">Lihat 80 Aset lainnya</span>
            <i className="bi bi-arrow-right ms-1"></i>
          </div>
        </div>

        <div className="crypto-scroll-container">
          <div className="crypto-cards-row">
            {cryptos.map(coin => (
              <div key={coin.symbol} className="card crypto-card p-3">
                <div className="d-flex align-items-center mb-3">
                  <img src={coin.img} alt={coin.symbol} style={{ width: coin.w, height: 'auto' }} />
                  <div className="ms-3">
                    <div className="fw-bolder fs-5 lh-sm">{coin.symbol}</div>
                    <div className="text-muted" style={{ fontSize: '13px' }}>{coin.name}</div>
                  </div>
                </div>
                <div className="fw-semibold mb-2" style={{ fontSize: '15px' }}>{coin.price}</div>
                <div className="d-flex align-items-center gap-1">
                  <i
                    className={`bi bi-caret-${coin.up ? 'up' : 'down'}-fill`}
                    style={{ color: coin.up ? '#1a7a3a' : '#c0392b', fontSize: '18px' }}
                  ></i>
                  <span className="fw-bold" style={{ color: coin.up ? '#1a7a3a' : '#c0392b' }}>
                    {coin.change}
                  </span>
                </div>
              </div>
            ))}
          </div>
        </div>

      </div>
    </section>
  )
}
