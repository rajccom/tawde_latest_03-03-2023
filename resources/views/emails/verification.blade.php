<!--<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#e8ebef">
@php
	$logo = get_setting('header_logo');
@endphp
	<tr>
		<td align="center" valign="top" class="container" style="padding:50px 10px;">
			<!-- Container 
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="center">
						<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
							<tr>
								<td class="td" bgcolor="#ffffff" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
									<!-- Header 
									<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
										<tr>
											<td class="p30-15-0" style="padding: 40px 30px 0px 30px;">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
																<tr>
																	<td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="{{ uploaded_asset($logo) }}" width="191" height="24" border="0" alt="" /></td>
																</tr>
															</table>
														</th>
														<th class="column-empty" width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;"></th>
														<th class="column" width="120" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
																<tr>
																	<td class="text-header right" style="color:#000000; font-family:'Fira Mono', Arial,sans-serif; font-size:12px; line-height:16px; text-align:right;"><a href="{{ env('APP_URL') }}" target="_blank" class="link" style="color:#000001; text-decoration:none;"><span class="link" style="color:#000001; text-decoration:none;">{{ env('APP_NAME') }}</span></a></td>
																</tr>
															</table>
														</th>
													</tr>
												</table>
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td class="separator" style="padding-top: 40px; border-bottom:4px solid #000000; font-size:0pt; line-height:0pt;">&nbsp;</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									 END Header 

									<!-- Intro 
									
									<!-- END Intro
								</td>
							</tr>
							<tr>
								<td class="text-footer" style="padding-top: 30px; color:#1f2125; font-family:'Fira Mono', Arial,sans-serif; font-size:12px; line-height:22px; text-align:center;">
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!-- END Container 
		</td>
	</tr>
</table>-->
<div style=" width:94%; max-width:800px; margin:0 auto; border:1px solid #efefef;">
<div style=" width:90%; padding:10px 5%; background:#fff; text-align:left; border-bottom:1px solid #efefef;"><img src="http://101.53.138.131/~bluesystech/staging/public/uploads/all/vLRDbvblDadwQk0UVVNnfffF6V3k5UW1seyOqqIv.png" style="width:150px "></div>
<div style="font-size:13px; color:#000; text-align:left; line-height:20px; background:#fff; width: 90%; padding:5%; font-family:Arial, Helvetica, sans-serif;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" >
										<tr>
											<td class="p30-15" style="padding: 10px 30px 10px 30px;">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td class="h2 center pb10" style="color:#000000; font-family:'Ubuntu', Arial,sans-serif; font-size:39px; line-height:60px; text-align:center; padding-bottom:10px;">{{ $array['subject'] }}</td>
													</tr>
													<tr>
														<td class="h5 center blue pb30" style="font-family:'Ubuntu', Arial,sans-serif; font-size:20px; line-height:26px; text-align:center; color:#ad5921; padding-bottom:30px;">{{ $array['content'] }} </td>
													</tr>
                                                    @if(!empty( $array['link']))
                                                        <tr>
                                                            <td class="h5 center blue pb30" style="font-family:'Ubuntu', Arial,sans-serif; font-size:20px; line-height:26px; text-align:center; color:#ad5921; padding-bottom:30px;">
                                                                <a href="{{ $array['link'] }}" style="background: #ad5921;padding: 0.9rem 2rem;font-size: 0.875rem;text-decoration:none;color:#fff;border-radius: .2rem;" target="_blank">{{ translate("Click Here") }}</a>
                                                            </td>
                                                        </tr>
                                                    @endif
												</table>
											</td>
										</tr>
									</table>
									
									</div>
<div style="font-size:10px;color:#fff;text-align:left;line-height:20px;background:#ad5921;width:90%;padding:5px 5%; margin-top:30px;">© Tawde Vivah. All rights reserved.</div>
</div>