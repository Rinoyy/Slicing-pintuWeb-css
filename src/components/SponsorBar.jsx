export default function SponsorBar() {
  return (
    <div className="main-sponsor">
      <div className="container">
        <div className="row align-items-center">
          <div className="col-lg-3 col-md-4 text-lg-end text-center mb-3 mb-md-0">
            <span className="text-secondary fw-semibold" style={{ fontSize: '15px' }}>
              Terdaftar dan diawasi oleh
            </span>
          </div>
          <div className="col-lg-9 col-md-8 col-12">
            <div className="d-flex align-items-center gap-4 flex-wrap justify-content-center justify-content-md-start">
              <img src="/img/kemendag.png" alt="Kemendag" className="img-fluid"
                   style={{ maxWidth: '160px', height: 'auto', opacity: 0.8 }} />
              <img src="/img/kominfo.png" alt="Kominfo" className="img-fluid"
                   style={{ maxWidth: '52px', height: 'auto', opacity: 0.8 }} />
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
