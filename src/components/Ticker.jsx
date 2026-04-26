const items = [
  { symbol: 'BTC',   change: '+2.34%', type: 'green' },
  { symbol: 'ETH',   change: '-1.56%', type: 'red'   },
  { symbol: 'BNB',   change: '+3.45%', type: 'green' },
  { symbol: 'SOL',   change: '-0.87%', type: 'red'   },
  { symbol: 'ADA',   change: '+1.89%', type: 'green' },
  { symbol: 'DOT',   change: '-2.12%', type: 'red'   },
  { symbol: 'MATIC', change: '+0.78%', type: 'green' },
  { symbol: 'AVAX',  change: '-1.23%', type: 'red'   },
  { symbol: 'LINK',  change: '+4.56%', type: 'green' },
  { symbol: 'UNI',   change: '-0.99%', type: 'red'   },
  { symbol: 'DOGE',  change: '+3.21%', type: 'green' },
  { symbol: 'SHIB',  change: '-2.34%', type: 'red'   },
  { symbol: 'XRP',   change: '+1.45%', type: 'green' },
  { symbol: 'LTC',   change: '-0.65%', type: 'red'   },
  { symbol: 'ATOM',  change: '+2.89%', type: 'green' },
  { symbol: 'NEAR',  change: '-1.78%', type: 'red'   },
  { symbol: 'FTM',   change: '+3.67%', type: 'green' },
  { symbol: 'OP',    change: '-2.11%', type: 'red'   },
  { symbol: 'ARB',   change: '+1.34%', type: 'green' },
  { symbol: 'SAND',  change: '-0.56%', type: 'red'   },
]

// Duplicate untuk seamless infinite loop
const allItems = [...items, ...items]

export default function Ticker() {
  return (
    <div className="ticker-wrapper">
      <div className="ticker-track">
        {allItems.map((item, i) => (
          <div key={i} className={`ticker-item ${item.type}`}>
            <span className="ticker-symbol">{item.symbol}</span>
            <span className="ticker-change">{item.change}</span>
          </div>
        ))}
      </div>
    </div>
  )
}
