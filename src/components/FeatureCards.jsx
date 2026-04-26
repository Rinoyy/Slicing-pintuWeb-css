function ArrowIcon() {
  return (
    <div className="arrow-icon">
      <i className="bi bi-arrow-right"></i>
    </div>
  )
}

export default function FeatureCards() {
  return (
    <div className="card-sponsor">
      <div className="container">

        <div className="row g-4">
          {/* Card 1: Trading */}
          <div className="col-lg-5">
            <div className="card feature-card d-flex flex-row overflow-hidden"
                 style={{ background: '#f4f0f0', height: '220px' }}>
              <div className="p-4 d-flex flex-column justify-content-start flex-grow-1 z-1">
                <span className="h5 fw-bolder lh-sm">Trading 300+ koin dengan Rupiah</span>
              </div>
              <div className="d-flex align-items-end flex-shrink-0">
                <img src="/img/coins.png" alt="Coins"
                     style={{ height: '200px', width: 'auto', marginRight: '-16px' }} />
              </div>
              <ArrowIcon />
            </div>
          </div>

          {/* Card 2: Earn */}
          <div className="col-lg-7">
            <div className="card feature-card d-flex flex-row overflow-hidden"
                 style={{ background: 'rgb(237,244,254)', height: '220px' }}>
              <div className="p-4 d-flex flex-column justify-content-center flex-grow-1">
                <h4 className="fw-semibold lh-sm mb-2">Nabung di Earn, dapat bonus hingga</h4>
                <h2 className="h1 text-primary fw-bolder mb-0">14.1% APY</h2>
              </div>
              <div className="d-flex align-items-end flex-shrink-0">
                <img src="/img/earn.png" alt="Earn"
                     style={{ height: '210px', width: 'auto', marginRight: '-8px' }} />
              </div>
              <ArrowIcon />
            </div>
          </div>
        </div>

        <div className="row g-4 mt-0">
          {/* Card 3: Deposit */}
          <div className="col-lg-7">
            <div className="card feature-card d-flex flex-row overflow-hidden"
                 style={{ background: 'rgb(235,246,238)', height: '220px' }}>
              <div className="p-4 d-flex flex-column justify-content-center flex-grow-1">
                <h4 className="fw-semibold lh-sm mb-0">Deposit dan penarikan kapan pun</h4>
              </div>
              <div className="d-flex align-items-end flex-shrink-0">
                <img src="/img/money.png" alt="Money"
                     style={{ height: '230px', width: 'auto', marginRight: '-12px' }} />
              </div>
              <ArrowIcon />
            </div>
          </div>

          {/* Card 4: Berita */}
          <div className="col-lg-5">
            <div className="card feature-card d-flex flex-row overflow-hidden"
                 style={{ background: '#f4f0f0', height: '220px' }}>
              <div className="p-4 d-flex flex-column justify-content-start flex-grow-1 z-1">
                <span className="h5 fw-bolder lh-sm">Selalu update dengan berita crypto</span>
              </div>
              <div className="d-flex align-items-end flex-shrink-0">
                <img src="/img/pesan.png" alt="News"
                     style={{ height: '200px', width: 'auto', marginRight: '-16px' }} />
              </div>
              <ArrowIcon />
            </div>
          </div>
        </div>

      </div>
    </div>
  )
}
