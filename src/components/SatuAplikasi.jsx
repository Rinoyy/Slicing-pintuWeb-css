const apps = [
  {
    img:   '/img/phone1.png',
    logo:  '/img/originall.png',
    desc:  'Investasi crypto mudah, bahkan untuk pemula.',
    arrow: false,
  },
  {
    img:   '/img/phone2.png',
    logo:  '/img/originall.png',
    desc:  'Maksimalkan fitur trading kamu dengan fitur Pro.',
    arrow: true,
  },
  {
    img:   '/img/phone3.png',
    logo:  '/img/originall.png',
    desc:  'Trading, staking dan hunting airdrop di Web3.',
    arrow: true,
  },
]

export default function SatuAplikasi() {
  return (
    <section className="satu-aplikasi bg-white">
      <div className="container">

        <div className="text-center mb-5">
          <h2 className="fw-bolder">Satu Aplikasi, Tiada Batas</h2>
          <p className="text-muted mt-2">Semua kebutuhan crypto kamu ada di sini.</p>
        </div>

        <div className="row g-4">
          {apps.map((app, i) => (
            <div key={i} className="col-lg-4 col-md-6">
              <div className="card app-card h-100">
                <div className="card-img-top overflow-hidden" style={{ maxHeight: '320px' }}>
                  <img
                    src={app.img}
                    alt="App Screen"
                    className="img-fluid w-100"
                    style={{ objectFit: 'cover' }}
                  />
                </div>
                <div className="card-body pb-5">
                  <img src={app.logo} alt="Pintu" width="110" className="mb-3" />
                  <p className="h5 fw-bolder lh-sm mb-0">{app.desc}</p>
                </div>
                {app.arrow && (
                  <div className="arrow-icon">
                    <i className="bi bi-arrow-right"></i>
                  </div>
                )}
              </div>
            </div>
          ))}
        </div>

      </div>
    </section>
  )
}
