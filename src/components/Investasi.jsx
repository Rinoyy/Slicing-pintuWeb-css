import { useState } from 'react'

const coins = ['Bitcoin', 'Ethereum', 'Tether', 'Solana', 'Ripple']

const ranges = {
  Bitcoin:  { min: 64000,  max: 60000000, step: 1000,  init: 64000  },
  Ethereum: { min: 10000,  max: 40000000, step: 1000,  init: 10000  },
  Tether:   { min: 10000,  max: 10000000, step: 1000,  init: 10000  },
  Solana:   { min: 10000,  max: 20000000, step: 1000,  init: 10000  },
  Ripple:   { min: 10000,  max: 10000000, step: 1000,  init: 10000  },
}

const fmt = new Intl.NumberFormat('id-ID', {
  style: 'currency', currency: 'IDR', minimumFractionDigits: 0,
})

export default function Investasi() {
  const [coin,  setCoin]  = useState('Bitcoin')
  const [value, setValue] = useState(64000)
  const [tahun, setTahun] = useState(null)

  function handleCoin(e) {
    const c = e.target.value
    setCoin(c)
    setValue(ranges[c].init)
  }

  const r = ranges[coin]

  return (
    <section className="investasi-section">
      <div className="container">

        <div className="d-flex flex-wrap align-items-center gap-2 mb-4">
          <h3 className="mb-0">Jika kamu investasi</h3>
          <select
            className="form-select d-inline-block w-auto fw-bolder text-primary"
            style={{ fontSize: '20px' }}
            value={coin}
            onChange={handleCoin}
          >
            {coins.map(c => <option key={c} value={c}>{c}</option>)}
          </select>
        </div>

        <div className="investasi-box">
          <div className="row g-5 align-items-center">

            {/* Kiri: Input */}
            <div className="col-lg-6">
              <p className="range-label">Dengan modal awal</p>
              <input
                type="range"
                min={r.min} max={r.max} step={r.step} value={value}
                onChange={e => setValue(Number(e.target.value))}
              />
              <div className="text-muted mt-1" style={{ fontSize: '13px' }}>
                {fmt.format(r.min)} — {fmt.format(r.max)}
              </div>

              <p className="range-label mt-4">Selama</p>
              <div className="d-flex flex-wrap gap-2 mt-2">
                {[1, 2, 3, 4].map(t => (
                  <button
                    key={t}
                    className={`btn btn-tahun ${tahun === t ? 'btn_investasi' : ''}`}
                    onClick={() => setTahun(t)}
                  >
                    {t} Tahun
                  </button>
                ))}
              </div>
            </div>

            {/* Kanan: Hasil */}
            <div className="col-lg-6 text-center">
              <p className="text-muted mb-2">Estimasi hasil investasi</p>
              <div className="range-value-display">{fmt.format(value)}</div>
              <p className="text-muted mt-2" style={{ fontSize: '13px' }}>
                *Berdasarkan historis performa aset
              </p>
            </div>

          </div>
        </div>

      </div>
    </section>
  )
}
